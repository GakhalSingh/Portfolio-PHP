function button(){
  const bodyTheme = document.body;
  bodyTheme.classList.toggle("neonMode");
  // setInterval(button, 6000);
};
const NeonModeButton = document.getElementById('NeonModeButton');
NeonModeButton.onclick = () => {
  body.classList.replace('normalMode', 'neonMode');
};
function hourToDay() {
  let days = document.getElementById("numberDays").value;
  document.getElementById("hours").innerHTML = days / 24;
  console.log(days, hours);
};
function dayToHour() {
  let days = document.getElementById("numberHours").value;
  document.getElementById("days").innerHTML = days * 24;
  console.log(days, hours);
};

