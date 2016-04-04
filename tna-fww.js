/**
 *
 * TNA - FWW js
 *
 */

document.getElementById("research-category").onchange = function() {
    if (this.selectedIndex!==0) {
        window.location.href = this.value;
    }
};

$(document).ready(function () {
    //number of events displayed
    var n = 1;

    var $events = $("#events");
    $events.html("<p><i>Events programme loading.</i> If it does not appear after 10 seconds please <a href='http://nationalarchives.eventbrite.co.uk/' title='The National Archives events' target='_blank'>click here</a>.</p>");

    $.get('https://www.eventbriteapi.com/v3/events/search/?q=first+world+war&sort_by=date&organizer.id=2226699547&token=5VVFLKAPZUXJSKQ3QTBG', function (res) {
        if (res.events.length) {
            var s = "<ul class='tna-event-list no-bullet'>";

            if (n <= res.events.length) {
                // Do nothing
            } else {
                n = res.events.length;
            }

            for (var i = 0; i < n; i++) {
                var event = res.events[i];
                var eventTime = moment(event.start.local).format('dddd D MMMM YYYY, h:mm a');
                if (event.logo) {
                    var image = "<a href='" + event.url + "' alt='" + event.name.text + "' target='_blank'><img src='" + event.logo.url + "' alt='" + event.name.text + "'></a>";
                } else {
                    image = '<img src="http://placehold.it/400x200?text=Event">';
                }
                s += "<li class='clr'><div class='event-img'>" + eventOnline + image + "</div><div class='event-text'><p><span class='text-small'>" + eventTime + "</span></p><h4><a href='" + event.url + "' alt='" + event.name.text + "' target='_blank'>" + event.name.text + "</a></h4><p class='event-status'>" + free + "</p></div></li>";
            }
            s += "</ul>";
            $events.html(s);
        } else {
            $events.html("Sorry, there are no upcoming events.");
        }
    });
});
