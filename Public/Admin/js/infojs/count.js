function countUp(count) {
			'use strict';
			var div_by = 100,
				speed = Math.round(count / div_by),
				$display = $('.count'),
				run_count = 1,
				int_speed = 24;
			var int = setInterval(function () {
				if (run_count < div_by) {
					$display.text(speed * run_count);
					run_count++;
				} else if (parseInt($display.text()) < count) {
					var curr_count = parseInt($display.text()) + 1;
					$display.text(curr_count);
				} else {
					clearInterval(int);
				}
			}, int_speed);
		}
countUp($('.count').text());
function countUp2(count) {

'use strict';

    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count2'),
        run_count = 1,
        int_speed = 24;
    var int = setInterval(function () {
        if (run_count < div_by) {
            $display.text(speed * run_count);
            run_count++;
        } else if (parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}
countUp2($('.count2').text());
//alert($('.count2').text());
function countUp3(count) {

'use strict';

    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count3'),
        run_count = 1,
        int_speed = 24;
    var int = setInterval(function () {
        if (run_count < div_by) {
            $display.text(speed * run_count);
            run_count++;
        } else if (parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}
countUp3($('.count3').text());

function countUp4(count) {


'use strict';

    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count4'),
        run_count = 1,
        int_speed = 24;
    var int = setInterval(function () {
        if (run_count < div_by) {
            $display.text(speed * run_count);
            run_count++;
        } else if (parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}
countUp4($('.count4').text());
