const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

//kintamieji kainom skaiciuoti ir rodyti
var kiekiai = document.getElementsByClassName("kiekis");
var kaina_tekstas = document.getElementsByClassName("final-price");
var kiekis_input = document.getElementsByClassName("kiekis-input");

var bendra_suma = document.querySelector(".galutine-kaina-num");

console.log(kaina_tekstas[0]);
function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}

function kaina_stand() {
  var standart_array = document.getElementsByClassName("standart");
  for (var i = 0; i < standart_array.length; i++) {
    if (i == 0) {
      var suma_mazas = standart_array[i].value * 30;
    } else if (i == 1) {
      var suma_vidutinis = standart_array[i].value * 35;
    } else if (i == 2) {
      var suma_maxi = standart_array[i].value * 50;
    }
  }
  var suma = suma_mazas + suma_vidutinis + suma_maxi;
  document.querySelector(".final-price-stand").innerHTML = suma.toFixed(2);

  if (suma === 0) {
    document.querySelector(".final-price-stand").innerHTML = "00";
  }
  krepselis();
}

function galutine_kaina(produktas) {
  if (produktas.id == "alaus") {
    var suma = produktas.value * 40;
    kaina_tekstas[0].innerHTML = suma.toFixed(2);
    if (suma === 0) {
      kaina_tekstas[0].innerHTML = "00";
    }
    krepselis();
  } else if (produktas.id == "burgeriai") {
    var suma = produktas.value * 1;
    kaina_tekstas[1].innerHTML = suma.toFixed(2);

    if (suma === 0) {
      kaina_tekstas[1].innerHTML = "00";
    }
    krepselis();
  }
  //kruasanai  kaina skaiciavimas
  else if (produktas.id == "kruasanai") {
    var suma = 0;
    var kiekis_kruasan = document.getElementsByClassName(
      "kiekis-input-kruasan"
    );
    for (var i = 0; i < kiekis_kruasan.length; i++) {
      var suma = suma + kiekis_kruasan[i].value * 1.3;
    }
    kaina_tekstas[2].innerHTML = suma.toFixed(2);

    if (suma === 0) {
      kaina_tekstas[2].innerHTML = "00";
    }
    krepselis();
    //mini salotos
  } else if (produktas.id == "minisalotos") {
    var suma = produktas.value * 30;
    kaina_tekstas[3].innerHTML = suma.toFixed(2);

    if (suma === 0) {
      kaina_tekstas[3].innerHTML = "00";
    }
    krepselis();
    //vegan padeklas
  } else if (produktas.id == "veganiskas") {
    var suma = produktas.value * 45;
    kaina_tekstas[4].innerHTML = suma.toFixed(2);

    if (suma === 0) {
      kaina_tekstas[4].innerHTML = "00";
    }
    krepselis();
    //mini su ikrais
  } else if (produktas.id == "minisuikrais") {
    var suma = produktas.value * 20;
    kaina_tekstas[5].innerHTML = suma.toFixed(2);

    if (suma === 0) {
      kaina_tekstas[5].innerHTML = "00";
    }
    krepselis();
    //mini su krevetem
  } else if (produktas.id == "minisukrevetem") {
    var suma = produktas.value * 20;
    kaina_tekstas[6].innerHTML = suma.toFixed(2);

    if (suma === 0) {
      kaina_tekstas[6].innerHTML = "00";
    }
    krepselis();
    //vaiku padeklas
  } else if (produktas.id == "vaiku") {
    var suma = produktas.value * 40;
    kaina_tekstas[7].innerHTML = suma.toFixed(2);

    if (suma === 0) {
      kaina_tekstas[7].innerHTML = "00";
    }
    krepselis();
  }
}

const krepselis = function () {
  var suma = 0;
  for (var i = 0; i < kaina_tekstas.length; i++) {
    var suma = suma + parseFloat(kaina_tekstas[i].innerHTML);
  }
  var suma =
    suma + parseFloat(document.querySelector(".final-price-stand").innerHTML);
  bendra_suma.innerHTML = suma.toFixed(2);
  console.log(suma);
};

function createOption(value, text) {
  var option = document.createElement("option");
  option.text = text;
  option.value = value;
  return option;
}

var hourSelect = document.getElementById("valanda");
for (var i = 9; i <= 17; i++) {
  hourSelect.add(createOption(i, i));
}

var minutesSelect = document.getElementById("minutes");
for (var i = 0; i < 60; i += 15) {
  minutesSelect.add(createOption(i, i));
}
