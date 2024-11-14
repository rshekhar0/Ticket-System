<?php
AppInstaller::SetInstallerPath("installer");
AppInstaller::SetAppData("Support System Installer","Your complete support ticket system","3.0.6");
//css  Add
AppInstaller::AddCss("css/custom.css");

//Js Add
//AppInstaller::AddJs("js/custom.js");

//steps
AppInstaller::AddStep("step1");
AppInstaller::AddStep("step2");
AppInstaller::AddStep("step3");
AppInstaller::AddStep("step4");
AppInstaller::AddStep("finish");