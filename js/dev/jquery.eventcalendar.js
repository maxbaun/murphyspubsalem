
var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];

var prevMonth = 09;
var prevYear = 2013;

var currentMonth = 10;
var currentYear = 2013;
var table = $('#upcoming-events');
var tableDays = table.find('span');

var inAction = false;

$(document).ready(function(){
	switchItem($('#event-header'), 0);
})

$('.next').on('click', function(e){
	e.preventDefault();
	if(inAction) return;
	prevMonth = currentMonth;
	currentMonth++;
	
	if(currentMonth > 11) {
		currentMonth = 1;
		prevYear = currentYear;
		currentYear++;
	} else {
		prevYear = currentYear;
	}
	
	switchItem($('#event-header'), -1);
});

$('.prev').on('click', function(e){
	e.preventDefault();
	if(inAction) return;
	prevMonth = currentMonth;
	currentMonth--;
	if(currentMonth < 0) { 
		currentMonth = 11;
		prevYear = currentYear;
		currentYear--;
	} else {
		prevYear = currentYear;
	}
	switchItem($('#event-header'), 1);
	
});

function switchItem(item, dir){
	inAction = true;
	item.animate({ left : '+='+ 50*dir, opacity : 0}, function(){
		item.animate( { left : '+='+ 100*(dir*-1) }, 0, function(){
			item.html(months[currentMonth] + ' ' + currentYear);
			item.animate( { left : '+='+ 50*dir, opacity : 1}, function(){
				inAction = false;
			})
		})
	});
	GetEvents(currentYear,currentMonth,reloadCalendar);
}



function reloadCalendar(events){

	var d = new Date(currentYear,currentMonth,1 );
	var firstDay = d.getDay();
	firstDay = firstDay == 0 ? 6 : (firstDay-1)
	var maxDay = DaysInMonth(currentMonth, currentYear);
	var prevMax = DaysInMonth(prevMonth, prevYear);
	var className = '';
	var day = 1;
		$.each(table.find('tr'), function(i,v){
			$.each($(v).find('td span'), function(j,k){	
				$(k).animate({opacity: 0}, function(){
					$(k).attr('class', className);
					if(i == 1)
					{
						if(j >= firstDay){
							$(k).html(day);
							if(day < maxDay) {
								day++;
							}
						} else {
							$(k).html(prevMax-(firstDay-j-1));
							$(k).addClass('nextmonth');
						}
					} 
					else 
					{
						$(k).html(day);
						if(day < maxDay){
							day++;
						} else { 
							day = 1;
							className = 'nextmonth';
						};	
					}
					
					$(k).animate({opacity: 1});
					
					$(k).removeClass('party');
					$(k).parent().removeClass('party-day');

					if(events[day] != undefined && events[day] != '')
					{
						var hid = $(events[day]).attr("id");
						var dmo = day-1;
						$(k).html("<a class='inline cboxElement' href='#"+hid+"'>" + dmo + "</a>");
						
						$("#eventInfoData").append($(events[day]));
						$(k).addClass('party');
						$(k).parent().addClass('party-day');

						$(k).find(".inline").colorbox({inline:true, width:"50%"});
					}
				});
				
			});

		});
}


// $('.event-info').live('mouseover', function(){
// 	
// 
// 	$(this).stop().animate({opacity : 1, height: 50, top : -20})
// 	return false;
// })
// 
// $('.event-info').live('mouseleave', function(){
// 	
// 	$(this).stop().animate({opacity : 0, height: 20, top:-10})
// 	return false;
// 	
// })

function GetEvents(year,month,callback){
	/* this should be returned from api, number of day and html */
	month = month + 1;
	var data = "month=" + month + "&year=" + year;

	$.ajax({
		url: "libs/facebook-events.php",
		type: "GET",
		data: data,
		success: function (result) {
			if (result) {
				 var json = jQuery.parseJSON(result);
				 var events = {};
				 for(var i=0; i<json.length;i++)
				 {
				 	events[parseInt(json[i].day)+1] = json[i].html;
				 }
				 callback(events);
			}
		}
	
	});
	
	return false;	
}


function DaysInMonth(month, year){return 32 - new Date(year, month, 32).getDate()}