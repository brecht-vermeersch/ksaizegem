import { Calendar } from '@fullcalendar/core';
import listPlugin from '@fullcalendar/list';
import nlLocale from "@fullcalendar/core/locales/nl"
import googleCalendarPlugin from '@fullcalendar/google-calendar';

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.querySelector('.calendar');

    const calendar = new Calendar(calendarEl, {
        plugins: [ listPlugin, googleCalendarPlugin ],
        initialView: 'listMonth',
        locale: nlLocale,
        googleCalendarApiKey: process.env.GOOGLE_CALENDAR_API_KEY,
        events: {
            googleCalendarId: process.env.GOOGLE_CALENDAR_ID
        }
    });

    calendar.render();
});

