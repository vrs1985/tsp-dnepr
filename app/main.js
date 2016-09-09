
window.onload = function() {
  createPartner();
};
     

 

 function createPartner() {
     var imgArray = ["../img/partner-logo/Basetec.jpg", "../img/partner-logo/Bock.jpg", "../img/partner-logo/Thermoking_logo2.jpg",
     "../img/partner-logo/Carrier logo.jpg", "../img/partner-logo/DIXELL.png", "../img/partner-logo/Eberspacher_logo.jpg",
     "../img/partner-logo/GEA KUBA.jpg", "../img/partner-logo/i20110411163144-guntner.jpg"];

  function NewImg(src){
  var image = new Image ();
  image.src = src;
  image.alt = ""; 
  return image;
  }
  var logo = document.getElementById('logoCorp');

  function makeImg(elem, index, arr) {
    var index = new NewImg(elem); 
    logo.appendChild(index);
  }

  imgArray.forEach(makeImg);

  // var firstLogoCompany = logo.firstChild;
  // // var imgLogo = document.createElement("div");
  // logo.insertBefore(imgLogo, firstLogoCompany );
    
    var iitbigger = logo.childNodes[2].style;
      iitbigger.height = '100px';
    var stem = logo.childNodes[7].style;
          stem.height = '100px';
 }
  