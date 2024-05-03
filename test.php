<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <style>
        .homescreen {
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.homescreen .div {
  background-color: #ffffff;
  overflow: hidden;
  width: 375px;
  height: 812px;
  position: relative;
}

.homescreen .rectangle {
  position: absolute;
  width: 362px;
  height: 100px;
  top: 117px;
  left: 6px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0px 4px 4px #00000040;
}

.homescreen .tab-menu {
  position: fixed;
  width: 414px;
  height: 100px;
  top: 717px;
  left: -20px;
}

.homescreen .overlap {
  position: relative;
  width: 416px;
  height: 101px;
  left: -1px;
}

.homescreen .rectangle-2 {
  position: absolute;
  width: 416px;
  height: 94px;
  top: 7px;
  left: 0;
  background-color: #ffffff;
  box-shadow: 0px 2px 48px #0000001f;
}

.homescreen .search {
  position: absolute;
  width: 37px;
  height: 37px;
  top: 0;
  left: 190px;
}

.homescreen .overlap-group {
  position: relative;
  width: 47px;
  height: 47px;
  top: -5px;
  left: -5px;
  background-color: #0ca1cc;
  border-radius: 23.5px;
  border: 5px solid;
  border-color: #fefffe4d;
  box-shadow: 0px 0px 40px #7200ff4c;
}

.homescreen .add {
  position: absolute;
  width: 10px;
  height: 10px;
  top: 13px;
  left: 13px;
}

.homescreen .home-button {
  all: unset;
  box-sizing: border-box;
  position: absolute;
  width: 54px;
  height: 49px;
  top: 13px;
  left: 29px;
  background-color: #ffffff;
}

.homescreen .icon {
  position: absolute;
  width: 22px;
  height: 23px;
  top: 1px;
  left: 16px;
}

.homescreen .text-wrapper {
  top: 31px;
  left: 11px;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 10px;
  letter-spacing: -0.17px;
  position: absolute;
  line-height: normal;
}

.homescreen .home-button-2 {
  top: 14px;
  left: 93px;
  position: absolute;
  width: 54px;
  height: 49px;
  background-color: #ffffff;
}

.homescreen .text-wrapper-2 {
  position: absolute;
  top: 31px;
  left: 4px;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 10px;
  letter-spacing: -0.17px;
  line-height: normal;
}

.homescreen .icon-2 {
  position: absolute;
  width: 21px;
  height: 26px;
  top: -1px;
  left: 17px;
}

.homescreen .overlap-group-2 {
  position: absolute;
  width: 23px;
  height: 24px;
  top: 2px;
  left: -1px;
}

.homescreen .rectangle-3 {
  position: absolute;
  width: 23px;
  height: 22px;
  top: 2px;
  left: 0;
  border-radius: 2px;
  border: 1.6px solid;
  border-color: #979797;
}

.homescreen .path {
  position: absolute;
  width: 1px;
  height: 5px;
  top: 0;
  left: 15px;
}

.homescreen .img {
  position: absolute;
  width: 1px;
  height: 5px;
  top: 0;
  left: 6px;
}

.homescreen .path-2 {
  position: absolute;
  width: 21px;
  height: 1px;
  top: 0;
  left: 0;
}

.homescreen .home-button-3 {
  top: 13px;
  left: 334px;
  position: absolute;
  width: 54px;
  height: 49px;
  background-color: #ffffff;
}

.homescreen .icon-3 {
  position: absolute;
  width: 20px;
  height: 23px;
  top: 1px;
  left: 17px;
}

.homescreen .path-3 {
  position: absolute;
  width: 20px;
  height: 8px;
  top: 15px;
  left: 0;
}

.homescreen .oval {
  position: absolute;
  width: 12px;
  height: 12px;
  top: -1px;
  left: 4px;
  border-radius: 5.8px/5.96px;
  border: 1.6px solid;
  border-color: #d4d2d0;
}

.homescreen .overlap-wrapper {
  top: 14px;
  left: 264px;
  position: absolute;
  width: 54px;
  height: 49px;
  background-color: #ffffff;
}

.homescreen .overlap-2 {
  position: relative;
  width: 38px;
  height: 39px;
  top: 7px;
  left: 8px;
}

.homescreen .text-wrapper-3 {
  top: 24px;
  left: 0;
  position: absolute;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 10px;
  letter-spacing: -0.17px;
  line-height: normal;
}

.homescreen .favicon {
  position: absolute;
  width: 16px;
  height: 25px;
  top: 0;
  left: 10px;
  object-fit: cover;
}

.homescreen .top-bar {
  position: fixed;
  width: 375px;
  height: 296px;
  top: 8px;
  left: 0;
}

.homescreen .overlap-3 {
  position: relative;
  height: 470px;
  top: -8px;
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0px 4px 4px #00000040;
}

.homescreen .user-dashboard {
  position: absolute;
  width: 356px;
  height: 100px;
  top: 117px;
  left: 12px;
}

.homescreen .user {
  display: inline-flex;
  align-items: flex-start;
  gap: 10px;
  position: absolute;
  top: 15px;
  left: 10px;
  box-shadow: 0px 4px 4px #00000040;
}

.homescreen .ellipse {
  position: relative;
  width: 35px;
  height: 35px;
  background-color: #ffffff;
  border-radius: 17.5px;
}

.homescreen .user-alt {
  position: absolute;
  width: 20px;
  height: 20px;
  top: 7px;
  left: 7px;
}

.homescreen .overlap-group-3 {
  position: absolute;
  width: 75px;
  height: 33px;
  top: 17px;
  left: 58px;
}

.homescreen .good-evening {
  position: absolute;
  top: 0;
  left: 0;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #000000;
  font-size: 10px;
  letter-spacing: 0;
  line-height: normal;
}

.homescreen .text-wrapper-4 {
  position: absolute;
  top: 15px;
  left: 0;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #000000;
  font-size: 15px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.homescreen .text-wrapper-5 {
  top: 15px;
  left: 302px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #000000;
  font-size: 14px;
  letter-spacing: 0;
  position: absolute;
  line-height: normal;
}

.homescreen .map-pin-black-icon {
  position: absolute;
  width: 9px;
  height: 12px;
  top: 18px;
  left: 287px;
}

.homescreen .line {
  position: absolute;
  width: 311px;
  height: 1px;
  top: 57px;
  left: 17px;
  object-fit: cover;
}

.homescreen .overlap-4 {
  position: absolute;
  width: 151px;
  height: 34px;
  top: 66px;
  left: 17px;
}

.homescreen .rectangle-4 {
  position: absolute;
  width: 135px;
  height: 34px;
  top: 0;
  left: 0;
  background-color: #03c500;
  border-radius: 10px;
}

.homescreen .text-wrapper-6 {
  width: 110px;
  top: 10px;
  left: 41px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 16px;
  letter-spacing: 0;
  white-space: nowrap;
  position: absolute;
  line-height: normal;
}

.homescreen .div-wrapper {
  position: absolute;
  width: 142px;
  height: 34px;
  top: 66px;
  left: 193px;
  background-color: #03c500;
  border-radius: 10px;
}

.homescreen .text-wrapper-7 {
  position: absolute;
  width: 76px;
  top: 7px;
  left: 39px;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 700;
  color: #ffffff;
  font-size: 16px;
  letter-spacing: 0;
  line-height: normal;
  white-space: nowrap;
}

.homescreen .search-2 {
  position: absolute;
  width: 319px;
  height: 36px;
  top: 76px;
  left: 26px;
}

.homescreen .notification {
  position: absolute;
  width: 24px;
  height: 24px;
  top: 44px;
  left: 328px;
}

.homescreen .overlap-5 {
  position: relative;
  width: 22px;
  height: 23px;
  left: 2px;
}

.homescreen .vector {
  position: absolute;
  width: 20px;
  height: 21px;
  top: 2px;
  left: 0;
}

.homescreen .ellipse-2 {
  position: absolute;
  width: 9px;
  height: 9px;
  top: 0;
  left: 13px;
  background-color: var(--red);
  border-radius: 4.5px;
  border: 1px solid;
  border-color: var(--green);
}

.homescreen .icon-wrapper {
  position: absolute;
  width: 38px;
  height: 38px;
  top: 37px;
  left: 283px;
}

.homescreen .icon-4 {
  position: relative;
  width: 20px;
  height: 20px;
  top: 9px;
  left: 9px;
  background-image: url(./img/image.svg);
  background-size: 100% 100%;
}

.homescreen .oval-2 {
  position: absolute;
  width: 4px;
  height: 4px;
  top: 10px;
  left: 4px;
  background-color: #ffffff;
  border-radius: 2px;
}

.homescreen .oval-3 {
  position: absolute;
  width: 4px;
  height: 4px;
  top: 10px;
  left: 8px;
  background-color: #ffffff;
  border-radius: 2px;
}

.homescreen .oval-4 {
  position: absolute;
  width: 4px;
  height: 4px;
  top: 10px;
  left: 12px;
  background-color: #ffffff;
  border-radius: 2px;
}

.homescreen .overlap-6 {
  position: absolute;
  width: 350px;
  height: 218px;
  top: 241px;
  left: 12px;
  border-radius: 10px;
}

.homescreen .rectangle-5 {
  position: absolute;
  width: 331px;
  height: 218px;
  top: 0;
  left: 10px;
}

.homescreen .card {
  position: absolute;
  width: 350px;
  height: 218px;
  top: 0;
  left: 0;
  background-color: #03c500fc;
  border-radius: 10px;
  overflow: hidden;
}

.homescreen .overlap-7 {
  position: relative;
  width: 352px;
  height: 220px;
  top: -1px;
  left: -1px;
  background-color: #03c5004f;
  border-radius: 14px;
}

.homescreen .free-mastercard {
  position: absolute;
  width: 69px;
  height: 61px;
  top: 12px;
  left: 11px;
  object-fit: cover;
}

.homescreen .this-week-s-appointm {
  position: absolute;
  top: 84px;
  left: 14px;
  font-family: "Poppins-Black", Helvetica;
  font-weight: 900;
  color: #1e2022;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: normal;
}

.homescreen .p {
  top: 183px;
  left: 18px;
  font-size: 12px;
  position: absolute;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: #1e2022;
  letter-spacing: 1px;
  line-height: normal;
}

.homescreen .this-week-s-appointm-2 {
  top: 19px;
  left: 272px;
  font-size: 14px;
  position: absolute;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: #1e2022;
  letter-spacing: 1px;
  line-height: normal;
}

.homescreen .overlap-group-4 {
  position: absolute;
  width: 75px;
  height: 38px;
  top: 166px;
  left: 277px;
}

.homescreen .this-week-s-appointm-3 {
  top: 17px;
  left: 0;
  font-size: 14px;
  position: absolute;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: #1e2022;
  letter-spacing: 1px;
  line-height: normal;
}

.homescreen .icon-color {
  position: absolute;
  width: 13px;
  height: 18px;
  top: 0;
  left: 41px;
}

.homescreen .icon-color-2 {
  position: absolute;
  width: 13px;
  height: 18px;
  top: 41px;
  left: 312px;
}

.homescreen .text-wrapper-8 {
  position: absolute;
  width: 154px;
  top: 141px;
  left: 26px;
  text-shadow: 0px 4px 4px #00000040;
  font-family: "Poppins-Regular", Helvetica;
  font-weight: 400;
  color: #ffffff80;
  font-size: 12px;
  letter-spacing: 1px;
  line-height: normal;
}

.homescreen .status-bar {
  position: fixed;
  width: 375px;
  height: 44px;
  top: 0;
  left: 0;
}

.homescreen .symbol {
  position: absolute;
  width: 67px;
  height: 12px;
  top: 17px;
  left: 294px;
}

.homescreen .battery {
  position: absolute;
  width: 24px;
  height: 12px;
  top: 0;
  left: 42px;
  background-image: url(./img/rectangle.svg);
  background-size: 100% 100%;
}

.homescreen .rectangle-6 {
  position: relative;
  width: 18px;
  height: 8px;
  top: 2px;
  left: 2px;
  background-color: #03c500;
  border-radius: 1.6px;
}

.homescreen .wi-fi {
  position: absolute;
  width: 15px;
  height: 11px;
  top: 0;
  left: 22px;
}

.homescreen .cellular {
  position: absolute;
  width: 17px;
  height: 11px;
  top: 0;
  left: 0;
}

.homescreen .time {
  position: absolute;
  width: 180px;
  height: 22px;
  top: 12px;
  left: 0;
}

.homescreen .time-2 {
  position: absolute;
  top: 1px;
  left: 30px;
  font-family: "Poppins-Black", Helvetica;
  font-weight: 900;
  color: #03c500;
  font-size: 15px;
  letter-spacing: -0.17px;
  line-height: normal;
}
:root {
  --red: rgba(238, 53, 12, 1);
  --green: rgba(27, 161, 105, 1);
}
    </style>
  </head>
  <body>
    <div class="homescreen">
      <div class="div">
        <div class="rectangle"></div>
        <div class="tab-menu">
          <div class="overlap">
            <div class="rectangle-2"></div>
            <div class="search">
              <div class="overlap-group"><img class="add" src="img/add.png" /></div>
            </div>
            <button class="home-button">
              <img class="icon" src="img/icon.svg" />
              <div class="text-wrapper">Home</div>
            </button>
            <div class="home-button-2">
              <div class="text-wrapper-2">Schedule</div>
              <div class="icon-2">
                <div class="overlap-group-2">
                  <div class="rectangle-3"></div>
                  <img class="path" src="img/path-2.svg" />
                  <img class="img" src="img/path-3.svg" />
                </div>
                <img class="path-2" src="img/path.svg" />
              </div>
            </div>
            <div class="home-button-3">
              <div class="text-wrapper-2">My office</div>
              <div class="icon-3">
                <img class="path-3" src="img/path-4.svg" />
                <div class="oval"></div>
              </div>
            </div>
            <div class="overlap-wrapper">
              <div class="overlap-2">
                <div class="text-wrapper-3">My Pros</div>
                <img class="favicon" src="img/favicon-1.png" />
              </div>
            </div>
          </div>
        </div>
        <div class="top-bar">
          <div class="overlap-3">
            <div class="user-dashboard">
              <div class="user">
                <div class="ellipse"></div>
                <img class="user-alt" src="img/user-alt.svg" />
              </div>
              <div class="overlap-group-3">
                <div class="good-evening">Good&nbsp;&nbsp;Evening</div>
                <div class="text-wrapper-4">Ian Aluda</div>
              </div>
              <div class="text-wrapper-5">Thika</div>
              <img class="map-pin-black-icon" src="img/map-pin-black-icon-1.svg" />
              <img class="line" src="img/line-1.svg" />
              <div class="overlap-4">
                <div class="rectangle-4"></div>
                <div class="text-wrapper-6">Deposit</div>
              </div>
              <div class="div-wrapper"><div class="text-wrapper-7">withdraw</div></div>
            </div>
            <img class="search-2" src="img/search.png" />
            <div class="notification">
              <div class="overlap-5">
                <img class="vector" src="img/vector.svg" />
                <div class="ellipse-2"></div>
              </div>
            </div>
            <div class="icon-wrapper">
              <div class="icon-4">
                <div class="oval-2"></div>
                <div class="oval-3"></div>
                <div class="oval-4"></div>
              </div>
            </div>
            <div class="overlap-6">
              <img class="rectangle-5" src="img/rectangle-360.svg" />
              <div class="card">
                <div class="overlap-7">
                  <img class="free-mastercard" src="img/free-mastercard-3521564-2944982-1.png" />
                  <div class="this-week-s-appointm">Wallet Balance</div>
                  <p class="p">Click Above To show balance</p>
                  <div class="this-week-s-appointm-2">Deposit</div>
                  <div class="overlap-group-4">
                    <div class="this-week-s-appointm-3">Withdraw</div>
                    <img class="icon-color" src="img/icon-color.svg" />
                  </div>
                  <img class="icon-color-2" src="img/icon-color-2.svg" />
                  <div class="text-wrapper-8">bal - 393039</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="status-bar">
          <div class="symbol">
            <div class="battery"><div class="rectangle-6"></div></div>
            <img class="wi-fi" src="img/wi-fi.svg" />
            <img class="cellular" src="img/cellular.svg" />
          </div>
          <div class="time"><div class="time-2">9:41</div></div>
        </div>
      </div>
    </div>
  </body>
</html>