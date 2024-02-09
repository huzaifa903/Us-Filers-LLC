/**
 * App Calendar
 */

/**
 * ! If both start and end dates are same Full calendar will nullify the end date value.
 * ! Full calendar will end the event on a day before at 12:00:00AM thus, event won't extend to the end date.
 * ! We are getting events from a separate file named app-calendar-events.js. You can add or remove events from there.
 *
 **/

'use strict';

let direction = 'ltr';

if (isRtl) {
  direction = 'rtl';
}

document.addEventListener('DOMContentLoaded', function () {
  (function () {
    const calendarEl = document.getElementById('calendar'),
      appCalendarSidebar = document.querySelector('.app-calendar-sidebar'),
      addEventSidebar = document.getElementById('addEventSidebar'),
      appOverlay = document.querySelector('.app-overlay'),
      calendarsColor = {
        2: 'primary',
        3: 'success',
        4: 'danger',
        5: 'warning',
        6: 'info'
      },
      offcanvasTitle = document.querySelector('.offcanvas-title'),
      // btnToggleSidebar = document.querySelector('.btn-toggle-sidebar'),
      btnSubmit = document.querySelector('button[type="submit"]'),
      btnDeleteEvent = document.querySelector('.btn-delete-event'),
      btnDetail = document.querySelector('.btn-detail'),
      btnCancel = document.querySelector('.btn-cancel'),
      charges = document.querySelector('#charges'),
      appointment_id = document.querySelector('#appointment_id'),
      appointment_date = document.querySelector('#appointment_date'),
      appointment_day = document.querySelector('#appointment_day'),
      day_id = document.querySelector('#day_id'),
      discount = document.querySelector('#discount'),
      tax = document.querySelector('#tax'),
      whatsapp_no = document.querySelector('#whatsapp_no'),
      doctor_id = $('#doctor_id'), // ! Using jquery vars due to select2 jQuery dependency
      patient_id = $('#patient_id'), // ! Using jquery vars due to select2 jQuery dependency
      procedure_id = $('#procedure_id'), // ! Using jquery vars due to select2 jQuery dependency
      share = document.querySelector('#share'),
      amount = document.querySelector('#amount'),
      // file = document.querySelectorAll('#file'),
      file = $('.fallback input[type="file"]'),
      comment = document.querySelector('#comment'),
      // allDaySwitch = document.querySelector('.allDay-switch'),
      selectAll = document.querySelector('.select-all'),
      filterInput = [].slice.call(document.querySelectorAll('.input-filter')),
      inlineCalendar = document.querySelector('.inline-calendar');

    let eventToUpdate,
      currentEvents = events, // Assign app-calendar-events.js file events (assume events from API) to currentEvents (browser store/object) to manage and update calender events
      isFormValid = false,
      inlineCalInstance;

    // Init event Offcanvas
    const bsAddEventSidebar = new bootstrap.Offcanvas(addEventSidebar);

    //! TODO: Update Event label and guest code to JS once select removes jQuery dependency
    // Event Label (select2)
    if (doctor_id.length) {
    }

    // Event Guests (select2)
    if (patient_id.length) {

    }

    // Event start (flatpicker) 
    if (appointment_date) {
      var start = appointment_date.flatpickr({
        enableTime: true,
        altFormat: 'Y-m-dTH:i:S',
        onReady: function (selectedDates, dateStr, instance) {
          if (instance.isMobile) {
            instance.mobileInput.setAttribute('step', null);
          }
        }
      });
    }

    // Inline sidebar calendar (flatpicker)
    if (inlineCalendar) {
      inlineCalInstance = inlineCalendar.flatpickr({
        monthSelectorType: 'static',
        inline: true
      });
    }

    // Event click function
    function eventClick(info) {
      var eventId = info.event._def.publicId;
      // console.log(eventId)

      $.ajax({
        url: `/api/appointment/${eventId}`, // Replace with your API endpoint
        type: 'GET',
        success: function (response) {
          if (response.data) {
            const eventToUpdate = response.data;

            // Populate the event form fields with the fetched data
            appointment_id.value = eventToUpdate.id;
            appointment_date.value = moment(eventToUpdate.appointment_at).format('YYYY-MM-DD HH:mm:ss');
            appointment_day.value = eventToUpdate.day.name;
            day_id.value = eventToUpdate.day_id;
            doctor_id.val(eventToUpdate.doctor_id).trigger('change');
            patient_id.val(eventToUpdate.patient_id).trigger('change');
            procedure_id.val(eventToUpdate.procedure_id).trigger('change');
            charges.value = eventToUpdate.charges;
            discount.value = eventToUpdate.discount;
            whatsapp_no.value = eventToUpdate.patient.whatsapp_no;
            tax.value = eventToUpdate.tax;
            share.value = eventToUpdate.share;
            amount.value = eventToUpdate.total_amount;
            comment.value = eventToUpdate.comment;
            // Handle other form fields as needed

            // Show the edit form in your UI (e.g., open a modal)
            bsAddEventSidebar.show();
            if (offcanvasTitle) {
              offcanvasTitle.innerHTML = 'Update Appointment';
            }
            btnSubmit.innerHTML = 'Update';
            btnSubmit.classList.add('btn-update-event');
            btnSubmit.classList.remove('btn-add-event');
            btnDeleteEvent.classList.remove('d-none');
            btnDetail.classList.remove('d-none');
          } else {
            console.error('Error fetching event details:', response.message);
          }
        },
        error: function (error) {
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Something Went Wrong!',
            showConfirmButton: false,
            timer: 2500
          });
        }
      });

      btnDeleteEvent.addEventListener('click', e => {
        // console.log(eventId)
        removeEvent(parseInt(eventId));
        // eventToUpdate.remove();
        bsAddEventSidebar.hide();
      });

      btnDetail.addEventListener('click', e => {
        // console.log(appointment_id.value)
        window.location.href = '/appointment-detail/' + appointment_id.value;
      });
    }

    // Modify sidebar toggler
    function modifyToggler() {
      const fcSidebarToggleButton = document.querySelector('.fc-sidebarToggle-button');
      fcSidebarToggleButton.classList.remove('fc-button-primary');
      fcSidebarToggleButton.classList.add('d-lg-none', 'd-inline-block', 'ps-0');
      while (fcSidebarToggleButton.firstChild) {
        fcSidebarToggleButton.firstChild.remove();
      }
      fcSidebarToggleButton.setAttribute('data-bs-toggle', 'sidebar');
      fcSidebarToggleButton.setAttribute('data-overlay', '');
      fcSidebarToggleButton.setAttribute('data-target', '#app-calendar-sidebar');
      fcSidebarToggleButton.insertAdjacentHTML('beforeend', '<i class="mdi mdi-menu mdi-24px text-body"></i>');
    }

    // Filter events by calender
    function selectedCalendars() {
      let selected = [],
        filterInputChecked = [].slice.call(document.querySelectorAll('.input-filter:checked'));

      filterInputChecked.forEach(item => {
        selected.push(item.getAttribute('data-value'));
      });

      // console.log(selected)
      return selected;
    }

    // --------------------------------------------------------------------------------------------------
    // AXIOS: fetchEvents
    // * This will be called by fullCalendar to fetch events. Also this can be used to refetch events.
    // --------------------------------------------------------------------------------------------------
    function fetchEvents(info, successCallback) {
      $.ajax({
        url: '/api/appointments',
        type: 'GET',
        success: function (result) {
          if (result.data) {
            var appointments = result.data;

            // Transform the appointment data into FullCalendar-compatible events
            var events = appointments.map(function (appointment) {
              return {
                id: appointment.id,
                title: appointment.patient.name,
                start: appointment.appointment_at,
                doctor_id: appointment.doctor_id,
                patient_id: appointment.patient_id,
                whatsapp_no: appointment.patient.whatsapp_no,
                procedure_id: appointment.procedure_id,
                charges: appointment.charges,
                discount: appointment.discount,
                tax: appointment.tax,
                amount: appointment.total_amount,
                comment: appointment.comment,
                day_id: appointment.day_id,
                file: appointment.file,
                extendedProps: {
                  calendar: appointment.doctor_id,
                  procedureName: appointment.procedure.name,
                  doctorName: appointment.doctor.name,
                  total_amount: appointment.total_amount,
                }
              };
            });

            var calendars = selectedCalendars();
            let selectedEvents = events.filter(function (event) {
              // Convert event.extendedProps.calendar to string and check if it's in the selected calendars
              return calendars.includes(event.extendedProps.calendar.toString());
            });
            // console.log('selectedEvents', selectedEvents);

            successCallback(selectedEvents);
          } else {
            console.error('Error fetching appointments:', result.message);
          }
        },
        error: function (error) {
          console.error('AJAX Error:', error);
        }
      });
    }


    // Init FullCalendar
    // ------------------------------------------------
    let calendar = new Calendar(calendarEl, {
      initialView: 'timeGridDay',
      events: fetchEvents,
      plugins: [dayGridPlugin, interactionPlugin, listPlugin, timegridPlugin],
      editable: true,
      dragScroll: true,
      // dayMaxEvents: 2,
      eventResizableFromStart: true,
      customButtons: {
        sidebarToggle: {
          text: 'Sidebar'
        }
      },
      headerToolbar: {
        start: 'sidebarToggle, prev,next, title',
        end: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      direction: direction,
      initialDate: new Date(),
      // validRange: {
      //   start: new Date(), // Start date is today or later
      // },
      navLinks: true, // can click day/week names to navigate views
      eventClassNames: function ({ event: calendarEvent }) {
        const colorName = calendarsColor[calendarEvent._def.extendedProps.calendar];
        // Background Color
        return ['fc-event-' + 'primary'];
      },
      dateClick: function (info) {
        const dayNameToIdMapping = {
          'Monday': 1,
          'Tuesday': 2,
          'Wednesday': 3,
          'Thursday': 4,
          'Friday': 5,
          'Saturday': 6,
          'Sunday': 7,
        };
        let date = moment(info.date).format('YYYY-MM-DD HH:mm:ss');
        let day = moment(date, 'YYYY-MM-DD HH:mm:ss').format('dddd');
        let dayId = dayNameToIdMapping[day];
        resetValues();
        bsAddEventSidebar.show();

        // For new event set offcanvas title text: Add Event
        if (offcanvasTitle) {
          offcanvasTitle.innerHTML = 'Add Appointment';
        }
        btnSubmit.innerHTML = 'Add';
        btnSubmit.classList.remove('btn-update-event');
        btnSubmit.classList.add('btn-add-event');
        btnDeleteEvent.classList.add('d-none');
        btnDetail.classList.add('d-none');
        appointment_date.value = date;
        appointment_day.value = day;
        day_id.value = dayId;
      },
      eventClick: function (info) {
        // console.log(info)
        eventClick(info);
      },
      eventMouseEnter: function (info) {
        // Display procedure name, doctor name, and charges when hovering over the event
        const event = info.event;
        const tooltipContent = `
          Patient: ${event.title}<br>
          Doctor: ${event.extendedProps.doctorName}<br>
          Procedure: ${event.extendedProps.procedureName}<br>
          Charges: ${event.extendedProps.total_amount} Rs`;
        showTooltip(info.jsEvent, tooltipContent);
      },
      eventMouseLeave: function (info) {
        // Remove the tooltip when the mouse leaves the event
        hideTooltip();
      },
      datesSet: function () {
        modifyToggler();
      },
      viewDidMount: function () {
        modifyToggler();
      }
    });
    let tooltip = null; // Define a variable to hold the tooltip element

    // Function to show a tooltip
    function showTooltip(jsEvent, content) {
      hideTooltip(); // Remove any existing tooltips

      tooltip = document.createElement('div');
      tooltip.innerHTML = content;
      tooltip.className = 'custom-tooltip';

      // Position the tooltip near the mouse cursor
      tooltip.style.position = 'fixed';
      tooltip.style.left = jsEvent.clientX + 'px';
      tooltip.style.top = jsEvent.clientY + 'px';

      document.body.appendChild(tooltip);
    }

    // Function to hide the tooltip
    function hideTooltip() {
      if (tooltip) {
        tooltip.remove();
        tooltip = null;
      }
    }
    // Render calendar
    calendar.render();
    // Modify sidebar toggler
    modifyToggler();

    const eventForm = document.getElementById('eventForm');
    // const fv = FormValidation.formValidation(eventForm, {
    //   fields: {
    //     appointment_date: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please enter Appointment Date and Time! '
    //         }
    //       }
    //     },
    //     procedure_id: {
    //       validators: {
    //         notEmpty: {
    //           message: 'Please Select Procedure ! '
    //         }
    //       }
    //     }
    //   },
    //   plugins: {
    //     trigger: new FormValidation.plugins.Trigger(),
    //     bootstrap5: new FormValidation.plugins.Bootstrap5({
    //       // Use this for enabling/changing valid/invalid class
    //       eleValidClass: '',
    //       rowSelector: function (field, ele) {
    //         // field is the field name & ele is the field element
    //         return '.mb-4';
    //       }
    //     }),
    //     submitButton: new FormValidation.plugins.SubmitButton(),
    //     // Submit the form when all fields are valid
    //     // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
    //     autoFocus: new FormValidation.plugins.AutoFocus()
    //   }
    // })
    //   .on('core.form.valid', function () {
    //     // Jump to the next step when all fields in the current step are valid
    //     isFormValid = true;
    //   })
    //   .on('core.form.invalid', function () {
    //     // if fields are invalid
    //     isFormValid = false;
    //   });

    // Sidebar Toggle Btn
    // if (btnToggleSidebar) {
    //   btnToggleSidebar.addEventListener('click', e => {
    //     btnCancel.classList.remove('d-none');
    //   });
    // }

    // Add Event
    // ------------------------------------------------
    async function addEvent(eventData) {
      // Check if an event with the same appointment_day, appointment_date, and doctor_id exists
      const isEventExists = events.some(event => {
        return (
          event.day_id === parseInt(eventData.day_id) &&
          event.appointment_at === eventData.appointment_date &&
          event.doctor_id === parseInt(eventData.doctor_id)
        );
      });

      if (isEventExists) {
        // Show an error message if the event already exists
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'error',
          title: 'An Appointment of the Doctor Already Exists on this Time!',
          showConfirmButton: false,
          timer: 2500
        });
      } else {
        try {
          const response = await $.ajax({
            type: 'POST',
            data: eventData,
            url: '/api/appointment/save',
            dataType: 'json',
          });

          if (response.status === 200) {
            // Event added to the database successfully
            bsAddEventSidebar.hide();
            // Show a success message
            Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'success',
              title: 'Appointment Created Successfully!',
              showConfirmButton: false,
              timer: 2500
            });

            // Wait for 1 second (1000 milliseconds) before refreshing the events
            await new Promise(resolve => setTimeout(resolve, 1000));

            // Refresh calendar events
            calendar.refetchEvents();
          } else {
            // Handle errors or display an error message
            Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'error',
              title: 'Something Went Wrong!',
              showConfirmButton: false,
              timer: 2500
            });
          }
        } catch (error) {
          // Handle AJAX error
          console.error('AJAX Error:', error);
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Something Went Wrong!',
            showConfirmButton: false,
            timer: 2500
          });
        }
      }
    }



    // Update Event
    // ------------------------------------------------
    function updateEvent(eventData) {
      console.log(eventData)
      $.ajax({
        url: '/api/appointment/update/' + eventData.id,
        type: 'POST',
        data: JSON.stringify(eventData),
        contentType: "application/json",
        dataType: "json",
        success: function (response) {
          if (response.status === 200) {
            // Appointment updated successfully
            // Handle success, e.g., close the modal or show a success message
            console.log('Appointment updated:', response.data);
            bsAddEventSidebar.hide();
            calendar.refetchEvents(); // Refresh the calendar
            Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'success',
              title: 'Appointment Updated Successfully!',
              showConfirmButton: false,
              timer: 2500
            });
          } else {
            // Handle errors or display an error message
            Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'success',
              title: 'Something Went Wrong!',
              showConfirmButton: false,
              timer: 2500
            });
          }
        },
        error: function (error) {
          // Handle AJAX error
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Something Went Wrong!',
            showConfirmButton: false,
            timer: 2500
          });
        }
      });
    }

    // Remove Event
    // ------------------------------------------------

    function removeEvent(eventId) {
      // Show a confirmation dialog before deleting the appointment
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#25bdad',
        cancelButtonColor: '#ff4d49',
        confirmButtonText: 'Yes, delete it!',
      }).then((result) => {
        if (result.isConfirmed) {
          // User confirmed, proceed with the delete operation
          $.ajax({
            type: "POST",
            url: "/api/appointment/delete/" + eventId, // Replace with the actual delete API URL
            dataType: 'json',
            success: function (response) {
              if (response.status === 200) {
                // Appointment deleted successfully
                calendar.refetchEvents();
                // Show a success message
                Swal.fire({
                  toast: true,
                  position: 'top-end',
                  icon: 'success', // Use 'success' icon for success message
                  title: 'Appointment Deleted Successfully!',
                  showConfirmButton: false,
                  timer: 2500
                });
              } else {
                // Handle errors or display an error message
                console.error('Error deleting appointment:', response.error);
                // Show an error message
                Swal.fire({
                  toast: true,
                  position: 'top-end',
                  icon: 'error',
                  title: 'Something Went Wrong!',
                  showConfirmButton: false,
                  timer: 2500
                });
              }
            },
            error: function (error) {
              Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Something Went Wrong!',
                showConfirmButton: false,
                timer: 2500
              });
            }
          });
        }
      });
    }


    // (Update Event In Calendar (UI Only)
    // ------------------------------------------------
    const updateEventInCalendar = (updatedEventData, propsToUpdate, extendedPropsToUpdate) => {
      const existingEvent = calendar.getEventById(updatedEventData.id);

      // --- Set event properties except date related ----- //
      // ? Docs: https://fullcalendar.io/docs/Event-setProp
      // dateRelatedProps => ['start', 'end', 'allDay']
      // eslint-disable-next-line no-plusplus
      for (var index = 0; index < propsToUpdate.length; index++) {
        var propName = propsToUpdate[index];
        existingEvent.setProp(propName, updatedEventData[propName]);
      }

      // --- Set date related props ----- //
      // ? Docs: https://fullcalendar.io/docs/Event-setDates
      existingEvent.setDates(updatedEventData.start, updatedEventData.end, {
        allDay: updatedEventData.allDay
      });

      // --- Set event's extendedProps ----- //
      // ? Docs: https://fullcalendar.io/docs/Event-setExtendedProp
      // eslint-disable-next-line no-plusplus
      for (var index = 0; index < extendedPropsToUpdate.length; index++) {
        var propName = extendedPropsToUpdate[index];
        existingEvent.setExtendedProp(propName, updatedEventData.extendedProps[propName]);
      }
    };

    // Remove Event In Calendar (UI Only)
    // ------------------------------------------------
    function removeEventInCalendar(eventId) {
      calendar.getEventById(eventId).remove();
    }

    // Add new event
    // ------------------------------------------------
    btnSubmit.addEventListener('click', e => {
      if (btnSubmit.classList.contains('btn-add-event')) {
        const requiredFields = ['appointment_date', 'procedure_id', 'doctor_id', 'patient_id', 'charges', 'amount', 'appointment_day']; // Add other required field IDs here

        // Check if the appointment date is in the past
        const appointmentDate = new Date(document.getElementById('appointment_date').value);
        const currentDate = new Date();

        // Check if all required fields are filled
        const isAllFieldsFilled = requiredFields.every(fieldId => {
          const field = document.getElementById(fieldId);
          return field.value.trim() !== ''; // Check if the field is not empty
        });

        if (appointmentDate < currentDate) {
          console.log('here')
          // Show a SweetAlert2 error message for past date
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Appointment Cannot be Scheduled in Past!',
            showConfirmButton: false,
            timer: 2500
          })
        } else if (!isAllFieldsFilled) {
          console.log('swal')
          // Show a SweetAlert2 error message for empty fields
          Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: 'Please Fill All Required Fields!',
            showConfirmButton: false,
            timer: 2500
          })
        } else {
          // if (isFormValid) {
          let newEvent = {
            appointment_date: appointment_date.value,
            appointment_day: appointment_day.value,
            day_id: day_id.value,
            doctor_id: doctor_id.val(),
            patient_id: patient_id.val(),
            whatsapp_no: whatsapp_no.value,
            procedure_id: procedure_id.val(),
            charges: charges.value,
            discount: discount.value,
            tax: tax.value,
            share: share.value,
            amount: amount.value,
            comment: comment.value,
            // file: file,

          };

          addEvent(newEvent);
          bsAddEventSidebar.hide();
        }
        // }
      } else {
        // Update event
        // ------------------------------------------------
        // if (isFormValid) {
        let eventData = {
          id: parseInt(appointment_id.value),
          appointment_date: appointment_date.value,
          appointment_day: appointment_day.value,
          day_id: day_id.value,
          doctor_id: doctor_id.val(),
          patient_id: patient_id.val(),
          whatsapp_no: whatsapp_no.value,
          procedure_id: procedure_id.val(),
          charges: charges.value,
          discount: discount.value,
          tax: tax.value,
          share: share.value,
          amount: amount.value,
          comment: comment.value,
          // file: file.value,
          //   },
          //   display: 'block',
          //   allDay: allDaySwitch.checked ? true : false
        };
        console.log('newEvent', eventData)

        updateEvent(eventData);
        // bsAddEventSidebar.hide();
        // }
      }
    });

    // Call removeEvent function
    // btnDeleteEvent.addEventListener('click', e => {
    //   console.log(eventData)
    //   // removeEvent(parseInt(eventToUpdate.id));
    //   // eventToUpdate.remove();
    //   bsAddEventSidebar.hide();
    // });

    // Reset event form inputs values
    // ------------------------------------------------
    function resetValues() {
      tax.value = '';
      appointment_date.value = '';
      appointment_day.value = '';
      day_id.value = '';
      charges.value = '';
      discount.value = '';
      whatsapp_no.value = '';
      amount.value = '';
      day_id.value = '';
      share.value = '';
      // allDaySwitch.checked = false;
      patient_id.val('').trigger('change');
      doctor_id.val('').trigger('change');
      procedure_id.val('').trigger('change');
      comment.value = '';
    }

    // When modal hides reset input values
    addEventSidebar.addEventListener('hidden.bs.offcanvas', function () {
      resetValues();
    });

    // Hide left sidebar if the right sidebar is open
    // btnToggleSidebar.addEventListener('click', e => {
    //   if (offcanvasTitle) {
    //     offcanvasTitle.innerHTML = 'Add Appointment';
    //   }
    //   btnSubmit.innerHTML = 'Add';
    //   btnSubmit.classList.remove('btn-update-event');
    //   btnSubmit.classList.add('btn-add-event');
    //   btnDeleteEvent.classList.add('d-none');
    //   appCalendarSidebar.classList.remove('show');
    //   appOverlay.classList.remove('show');
    // });

    // Calender filter functionality
    // ------------------------------------------------
    if (selectAll) {
      selectAll.addEventListener('click', e => {
        if (e.currentTarget.checked) {
          document.querySelectorAll('.input-filter').forEach(c => (c.checked = 1));
        } else {
          document.querySelectorAll('.input-filter').forEach(c => (c.checked = 0));
        }
        calendar.refetchEvents();
      });
    }

    if (filterInput) {
      filterInput.forEach(item => {
        item.addEventListener('click', () => {
          document.querySelectorAll('.input-filter:checked').length < document.querySelectorAll('.input-filter').length
            ? (selectAll.checked = false)
            : (selectAll.checked = true);
          calendar.refetchEvents();
        });
      });
    }

    document.addEventListener("DOMContentLoaded", function () {
      // Initialize inlineCalInstance here or in your existing initialization code

      // Check if inlineCalInstance is defined before accessing its properties
      if (typeof inlineCalInstance !== "undefined") {
        inlineCalInstance.config.onChange.push(function (date) {
          calendar.changeView(
            calendar.view.type,
            moment(date[0]).format("YYYY-MM-DD")
          );
          modifyToggler();
          appCalendarSidebar.classList.remove("show");
          appOverlay.classList.remove("show");
        });
      }
    });

  })();
});
