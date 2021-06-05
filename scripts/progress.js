var percent = 0;
document.querySelector(".progress-bar").style.width = percent + "%";

function grow(){
  percent = percent > 90 ? 100 : percent + 10;
    document.querySelector(".progress-bar").style.width = percent + "%";
    document.getElementById("percent").innerHTML = percent + "%";
    if (document.querySelector(".progress-bar").style.width == "40%") {
      document.getElementById("round1_flag").style.width = "12px";
      document.getElementById("round1_flag").style.height = "14px";
      document.getElementById("round1").style.width = "20px";
      document.getElementById("round1").style.height = "20px";
    }
    if (document.querySelector(".progress-bar").style.width == "70%") {
      document.getElementById("round2_flag").style.width = "12px";
      document.getElementById("round2_flag").style.height = "14px";
      document.getElementById("round2").style.width = "20px";
      document.getElementById("round2").style.height = "20px";
    }
    if (document.querySelector(".progress-bar").style.width == "100%") {
      document.getElementById("round3_flag").style.width = "12px";
      document.getElementById("round3_flag").style.height = "14px";
      document.getElementById("round3").style.width = "20px";
      document.getElementById("round3").style.height = "20px";
    }
}

function down(){
  percent = percent < 10 ? 0 : percent - 10;
    document.querySelector(".progress-bar").style.width = percent + "%";
    document.getElementById("percent").innerHTML = percent + "%";
    if (document.querySelector(".progress-bar").style.width == "30%") {
      document.getElementById("round1_flag").style.width = "0px";
      document.getElementById("round1_flag").style.height = "0px";
      document.getElementById("round1").style.width = "0px";
      document.getElementById("round1").style.height = "0px";
    }
    if (document.querySelector(".progress-bar").style.width == "60%") {
      document.getElementById("round2_flag").style.width = "0px";
      document.getElementById("round2_flag").style.height = "0px";
      document.getElementById("round2").style.width = "0px";
      document.getElementById("round2").style.height = "0px";
    }
    if (document.querySelector(".progress-bar").style.width == "90%") {
      document.getElementById("round3_flag").style.width = "0px";
      document.getElementById("round3_flag").style.height = "0px";
      document.getElementById("round3").style.width = "0px";
      document.getElementById("round3").style.height = "0px";
    }
}