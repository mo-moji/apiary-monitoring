const system = ()=>{
  //initializations
  const comb1 = document.getElementById("svg_1");
  const comb1Text = document.getElementById("text_1");

  const comb2 = document.getElementById("svg_2");
  const comb2Text = document.getElementById("text_2");

  const comb3 = document.getElementById("svg_3");
  const comb3Text = document.getElementById("text_3");

  const hive1Window = document.querySelector(".hive-1-wrapper");
  const hive2Window = document.querySelector(".hive-2-wrapper");

  const harvest = document.querySelectorAll("td.harvest");

  const adminChangeNameBtn = document.getElementById("admin-change-name-button");
  const adminChangeName = document.querySelector(".admin-change-name");
  const adminChangeNameCloseBtn = document.getElementById("change-name-cancel");

  // const selectQuestionsBtn = document.getElementById("select-questions-button");
  // const selectQuestions = document.querySelector(".select-question");
  // const selectQuestionCloseBtn = document.getElementById("close-questions");

  const changePasswordBtn = document.getElementById("change-password-button");
  const changePassword = document.querySelector(".change-password");
  const changePasswordCloseBtn = document.getElementById("close-change-password");

  const closeAdminWindow = document.querySelector(".close-window");
  const adminWindow = document.querySelector(".admin-settings-wrapper");
  const openAdminWindow = document.querySelector(".admin-icon");
  const adminName = document.querySelector(".admin-name");

  const openApiaryImage = document.querySelectorAll("button.open-apiary-image");
  const closeApiaryImage = document.querySelectorAll("button.close-apiary-image");
  const apiaryImage = document.querySelectorAll("div.apiary-image");
  //initializations end

  ////// js for apiary image/////////////////////////////////////////
  for (let i = 0; i < apiaryImage.length; i++) {
    openApiaryImage[i].addEventListener("click", () => {
      apiaryImage[i].style.opacity = "1";
      apiaryImage[i].style.pointerEvents = "all";
    })
    closeApiaryImage[i].addEventListener("click", () => {
      apiaryImage[i].style.opacity = "0";
      apiaryImage[i].style.pointerEvents = "none";
    })
    
  }
  ////// js for apiary image end/////////////////////////////////////


  /////js for admin window//////////////////////////////////////////
  closeAdminWindow.addEventListener("click",()=>{
    adminWindow.style.opacity = "0";
    adminWindow.style.pointerEvents = "none";
  })
   openAdminWindow.addEventListener("click", () => {
     adminWindow.style.opacity = "1";
     adminWindow.style.pointerEvents = "all";
   })
   openAdminWindow.addEventListener("mouseenter", () => {
     adminName.style.letterSpacing = "10px";
   })
   openAdminWindow.addEventListener("mouseleave", () => {
     adminName.style.letterSpacing = "2px";
   })


  adminChangeNameBtn.addEventListener("click",()=>{
    adminChangeName.style.transform = "translateY(0)";
  })
  adminChangeNameCloseBtn.addEventListener("click",()=>{
    adminChangeName.style.transform = "translateY(-200%)";
  })

  // selectQuestionsBtn.addEventListener("click", () => {
  //   selectQuestions.style.transform = "translateY(0)";
  // })
  // selectQuestionCloseBtn.addEventListener("click", () => {
  //   selectQuestions.style.transform = "translateY(-100%)";
  // })

  changePasswordBtn.addEventListener("click", () => {
    changePassword.style.transform = "translateY(0)";
  })
  changePasswordCloseBtn.addEventListener("click", () => {
    changePassword.style.transform = "translateY(-100%)";
  })
  /////js for admin window end//////////////////////////////////////




  //Hive table Ready or Not Ready JS
  for (let i = 0; i < harvest.length; i++) {
    if (harvest[i].innerHTML == 'Ready') {
      harvest[i].style.color = "Green";
    }else{
      harvest[i].style.color = "Red";
    }
    
  }
  if (harvest[0].innerHTML == "Ready") {
    harvest[0].style.color = "green";
  }
  //Hive table Ready or Not Ready JS end


  //honeycomb buttons js
  ////////////////////////////////////////////////111111111111111111111
  comb1.addEventListener("mouseenter",()=>{
    comb1.style.fill = "#ff7f00";
    comb1Text.style.fill = "#ffffff";
  })
  comb1.addEventListener("mouseleave",()=>{
    comb1.style.fill = "#ffffff";
    comb1Text.style.fill = "#ff7f00";
  })
  comb1.addEventListener("click",()=>{
    hive1Window.style.transform = "translateX(0)";
    hive2Window.style.transform = "translateX(200%)";
    
  })
  ////////////////////////////////////////////////111111111111111111111

  ////////////////////////////////////////////////222222222222222222222
  comb2.addEventListener("mouseenter",()=>{
    comb2.style.fill = "#ff7f00";
    comb2Text.style.fill = "#ffffff";
  })
  comb2.addEventListener("mouseleave",()=>{
    comb2.style.fill = "#ffffff";
    comb2Text.style.fill = "#ff7f00";
  })
  comb2.addEventListener("click", () => {
    hive2Window.style.transform = "translateX(0)";
    hive1Window.style.transform = "translateX(200%)";
  })
  ////////////////////////////////////////////////222222222222222222222

  ////////////////////////////////////////////////333333333333333333333
  comb3.addEventListener("mouseenter",()=>{
    comb3.style.fill = "#ff7f00";
    comb3Text.style.fill = "#ffffff";
  })
  comb3.addEventListener("mouseleave",()=>{
    comb3.style.fill = "#ffffff";
    comb3Text.style.fill = "#ff7f00";
  })
  comb3.addEventListener("click", () => {
    hive1Window.style.transform = "translateX(200%)";
    hive2Window.style.transform = "translateX(200%)";
  })
  ////////////////////////////////////////////////333333333333333333333
  
  //honeycomb buttons js end

}

system();