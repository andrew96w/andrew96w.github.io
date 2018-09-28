document.getElementById('slider_btn').onclick = sliderRight;
document.getElementById('slider_btnr').onclick = sliderLeft;


var left = 0;
var right = 0;
		function sliderLeft () {
			var polosa = document.getElementById('slider_pol');
			left = left - 1110;
			if (left<-4440)
			{
				left = 0;
			}
			polosa.style.left = left+"px";
		}
		function sliderRight () {
			var polosa = document.getElementById('slider_pol');
			left = left + 1110;
			if (left>0)
			{
				left = -4440;
			}
			polosa.style.left = left+"px";
		}