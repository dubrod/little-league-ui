//touch/mobile detection
if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
	var touch_device = true;
	console.log("ontouchstart detected.");
}
if (
	navigator.userAgent.match(/Phone/i) ||
	navigator.userAgent.match(/DROID/i) ||
	navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/BlackBerry/) ||
    navigator.userAgent.match(/Windows Phone/i) ||
    navigator.userAgent.match(/ZuneWP7/i) ||
    navigator.userAgent.match(/IEMobile/i)
){ var mobile_device = true; var touch_device = true; }

//touch/tablet detection
if (
	navigator.userAgent.match(/Tablet/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/Kindle/i) ||
    navigator.userAgent.match(/Playbook/i) ||
    navigator.userAgent.match(/Nexus/i) ||
    navigator.userAgent.match(/Xoom/i) ||
    navigator.userAgent.match(/SM-N900T/i) || //Samsung Note 3
    navigator.userAgent.match(/GT-N7100/i) || //Samsung Note 2
    navigator.userAgent.match(/SAMSUNG-SGH-I717/i) || //Samsung Note
    navigator.userAgent.match(/SM-T330NU/i) //Samsung Tab 4

){ var tablet_device = true; var touch_device = true; }

if( mobile_device || tablet_device || touch_device ){ console.log(navigator.userAgent); }

//IE11= User Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E; rv:11.0) like Gecko
//IE10= User Agent: Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)
//IE9=  User Agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729)

if(navigator.userAgent.match(/Trident\/7.0/i)) {}
if(navigator.userAgent.match(/MSIE/i)){}


//main functions

function mobileViewCheck(){
	var wrapperWidth = $("header").width();
	if(wrapperWidth > 768){return false;} else { return true; }
}

function calculate_age(){
	birth_month = $('#birthMonth').val();
	birth_day = $('#birthDay').val();
	birth_year = $('#birthYear').val();
    today_date = new Date();
    today_year = today_date.getFullYear();
    today_month = today_date.getMonth();
    today_day = today_date.getDate();
    age = today_year - birth_year;

    if ( today_month < (birth_month - 1)){
        age--;
    }
    if (((birth_month - 1) == today_month) && (today_day < birth_day)){
        age--;
    }
	console.log("age: "+age);
	if(age){
		$('#calcAge').html('Age: '+age).fadeIn();
	}

	calculate_group(age);
    //return age;
}

function calculate_group(age){
	var calc_group = false;
	switch(true) {
        case (age>14):
            var calc_group = "Your too old for this league";
            break;
        case (age>11):
            var calc_group = "Under 14";
            break;
		case (age>9):
            var calc_group = "Under 12";
            break;
		case (age>7):
            var calc_group = "Under 10";
            break;
		case (age>5):
            var calc_group = "Under 8";
            break;
		case (age>3):
            var calc_group = "Under 6";
            break;
        default:
            var calc_group = false;
    }
	if(calc_group){
		$('#calcGroup').html('Division: '+calc_group).fadeIn();
	}
}
