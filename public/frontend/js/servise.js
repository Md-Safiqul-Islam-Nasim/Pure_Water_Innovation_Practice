
const picker = new easepick.create({
    element: document.getElementById('calendar-container'),
    css: [
        './assets/css/plugins/easepick.css',
    ],
    calendars: 1,  // Number of calendars to display
    grid: 1,       // Number of months to display per row
    inline: true,  // Display calendar inline
    format: 'DD-MM-YYYY',
});

picker.on('select', (event) => {
    const selectedDate = event.detail.date.format('YYYY-MM-DD');
    document.getElementById('selected-date').value = selectedDate;
    console.log(document.getElementById('selected-date').value);
});


const picker2 = new easepick.create({
    element: document.getElementById('calendar-container2'),
    css: [
        './assets/css/plugins/easepick.css',
    ],
    calendars: 1,  // Number of calendars to display
    grid: 1,       // Number of months to display per row
    inline: true,  // Display calendar inline
    format: 'DD-MM-YYYY',
});

picker2.on('select', (event) => {
    const selectedDate = event.detail.date.format('YYYY-MM-DD');
    document.getElementById('selected-date2').value = selectedDate;
    console.log(document.getElementById('selected-date2').value);
});


document.addEventListener('DOMContentLoaded', function () {
    const daysList = document.querySelector('.days-list');
    const items = daysList.querySelectorAll('.item');
    const selectedDaysInput = document.getElementById('selected-days');

    items.forEach(item => {
        item.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior

            // Remove active class from all items
            items.forEach(i => i.classList.remove('active'));

            // Add active class to the clicked item
            item.classList.add('active');
            console.log(selectedDaysInput);
            // Update the hidden input value
            selectedDaysInput.value = item.id;
            console.log(selectedDaysInput.value);
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const timesList = document.querySelector('.times');
    const timeBoxes = timesList.querySelectorAll('.time-box');
    const selectedTimeInput = document.getElementById('selected-time');

    timeBoxes.forEach(timeBox => {
        timeBox.addEventListener('click', function () {
            // Remove active class from all time boxes
            timeBoxes.forEach(box => box.classList.remove('active'));

            // Add active class to the clicked time box
            timeBox.classList.add('active');

            // Update the hidden input value
            selectedTimeInput.value = timeBox.textContent.trim();
            console.log(selectedTimeInput);
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const timesList = document.querySelector('.times2');
    const timeBoxes = timesList.querySelectorAll('.time-box');
    const selectedTimeInput = document.getElementById('selected-time2');

    timeBoxes.forEach(timeBox => {
        timeBox.addEventListener('click', function () {
            // Remove active class from all time boxes
            timeBoxes.forEach(box => box.classList.remove('active'));

            // Add active class to the clicked time box
            timeBox.classList.add('active');

            // Update the hidden input value
            selectedTimeInput.value = timeBox.textContent.trim();
            console.log(selectedTimeInput);
        });
    });
});
