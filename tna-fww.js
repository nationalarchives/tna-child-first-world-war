/**
 *
 * TNA - FWW js
 *
 */

// Online collections
document.getElementById("research-category").onchange = function() {
    if (this.selectedIndex!==0) {
        window.location.href = this.value;
    }
};

// Eventbrite API
$(document).ready(function () {
    //number of events displayed
    var n = 1;
    var x = 3;
    var $events = $("#event");
    var $eventList = $("#event-list");
    $events.html("<div class='entry-thumbnail'><a href='http://nationalarchives.eventbrite.co.uk/'><img src='/wp-content/themes/tna-fww/img/thumb-news.jpg' alt='First World War events'></a></div><div class='entry-content'><small>What&prime;s on</small><h2>First World War events</h2><p><i>Events programme loading.</i><br>If it does not appear after 10 seconds please <a href='http://nationalarchives.eventbrite.co.uk/' title='The National Archives events' target='_blank'>click here</a>.</p></div>");
    $.get("https://www.eventbriteapi.com/v3/events/search/?q=first+world+war&sort_by=date&organizer.id=2226699547&token=5VVFLKAPZUXJSKQ3QTBG", function (res) {
        if (res.events.length && n == 1) {
            var s = "<div class='single-event'>";
            if (n <= res.events.length) {
                // Do nothing
            } else {
                n = res.events.length;
            }
            for (var i = 0; i < n; i++) {
                var event = res.events[i];
                var eventTime = moment(event.start.local).format('dddd D MMMM YYYY, h:mm a');
                if (event.logo) {
                    var image = "<a href='" + event.url + "' alt='" + event.name.text + "' target='_blank'><img src='" + event.logo.url + "' alt='" + event.name.text + "' class='img-responsive'></a>";
                } else {
                    image = "";
                }
                s += "<div class='entry-thumbnail'>" + image + "</div><div class='entry-content'><small>What&prime;s on</small><h2><a href='" + event.url + "' title='" + event.name.text + "' target='_blank'>" + event.name.text + "</a></h2><p>" + eventTime + "</p>";
            }
            s += "<ul class='child'><li><a href='#about-our-programme' title='More First World War events'>More events</a></li></ul>";
            s += "</div></div>";
            $events.html(s);
        } else {
            $events.html("Sorry, there are no upcoming events.");
        }
        if (res.events.length && x == 3) {
            var s = "<ul>";
            if (x <= res.events.length) {
                // Do nothing
            } else {
                x = res.events.length;
            }
            for (var i = 1; i < x+1; i++) {
                var event = res.events[i];
                var eventTime = moment(event.start.local).format('dddd D MMMM YYYY, h:mm a');
                s += "<li><h4><a href='" + event.url + "' title='" + event.name.text + "' target='_blank'>" + event.name.text + "</a></h4><p>" + eventTime + "</p></li>";
            }
            s += "</ul>";
            $eventList.html(s);
        } else {
            $eventlist.html("Sorry, there are no upcoming events.");
        }
    });
});