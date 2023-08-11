<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>사문진 소개</title>
    <link rel="stylesheet" href="./css/heaader.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/toggle.css" />
    <link rel="stylesheet" href="./css/reserve.css" />
    <!-- 캘린더 CSS -->
    <link rel="stylesheet" href="css/pignose.calendar.min.css" />
    <link rel="stylesheet" href="css/style_calender_box.css" />
    <!-- 폰트어썸 CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- 캘린더 -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/pignose.calendar.full.min.js"></script>
  </head>

  <body>
    <header>
      <section class="contents">
        <nav>
          <div class="logo">
            <a href="./index.php">
              <img src="./images/main/logo.png" alt="logo" />
            </a>
          </div>
          <div class="nb">
            <ul class="gnb" th:if="${isLoggedIn}">
              <li><a href="./logout">Logout</a></li>
              <li><a href="./mypage">My page</a></li>
            </ul>
            <ul class="gnb" th:unless="${isLoggedIn}">
              <li><a href="./login">Login</a></li>
              <li><a href="./signup">Sign up</a></li>
            </ul>
            <ul class="lnb">
              <li><a href="./about.php">소개</a></li>
              <li><a href="./facility.php">시설</a></li>
              <li><a href="./map.php">오시는 길</a></li>
              <li>예약</li>
              <li><a href="./gallery.php">갤러리</a></li>
              <li><a href="./community.php">커뮤니티</a></li>
            </ul>
          </div>
          <div class="toggle_btn">
            <a class="menu-trigger" href="#">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </nav>
      </section>
      <div class="side">
        <a href="index.php"><i class="fa-solid fa-house"></i></a>
        <ul class="lnb">
          <li><a href="./about.php">소개</a></li>
          <li><a href="./facility.php">시설</a></li>
          <li><a href="./map.php">오시는 길</a></li>
          <li>예약</li>
          <li><a href="./gallery.php">갤러리</a></li>
          <li><a href="./community.php">커뮤니티</a></li>
        </ul>
        <ul class="gnb" th:if="${isLoggedIn}">
          <li><a href="./logout">Logout</a></li>
          <li><a href="./mypage">My page</a></li>
        </ul>
        <ul class="gnb" th:unless="${isLoggedIn}">
          <li><a href="./login">Login</a></li>
          <li><a href="./signup">Sign up</a></li>
        </ul>
      </div>
    </header>

    <!-- 메인이미지 -->
    <section id="darkImg">
      <div>
        <img src="./images/sub_reservation/reservation_main.jpg" alt="" />
      </div>
      <h1>Reservation</h1>
    </section>

    <!-- 탭 메뉴 -->
    <section class="contents_bg">
      <div id="class_wrapper" class="contents">
        <div class="wrapper" id="class_tab">
          <input id="class_1" type="radio" name="class_tap" checked="checked" />
          <input id="class_2" type="radio" name="class_tap" />

          <section class="class_buttons contents">
            <label for="class_1">
              <h1>FERRY</h1>
            </label>
            <label for="class_2">
              <h1>PICNIC</h1>
            </label>
          </section>
          <!-- 페이지 -->
          <div class="class_tab_item">
            <!-- 예약 -->
            <article>
              <div class="brownline">
                <h1 class="re_h1">예약하기</h1>
              </div>
            </article>
            <h2>FERRY</h2>
            <div class="multi-select-calendar">
              <div class="calendar"></div>
            </div>
            <div class="box">선택하신 날짜 : 2022-06-13 ~ 2022-06-16</div>
            <div class="reserve-select active">
              <h2>시간</h2>
              <div class="time-select">
                <div class="select-time select">11 : 00</div>
                <div class="select-time">13 : 00</div>
                <div class="select-time">14 : 00</div>
                <div class="select-time">15 : 00</div>
                <div class="select-time">16 : 00</div>
                <div class="select-time">17 : 00</div>
                <div class="select-time">18 : 00</div>
              </div>
            </div>
            <button class="reserve-submit" data-type="FERRY">예약하기</button>
            <!--kangelee-->
          </div>
          <div class="class_tab_item">
            <!-- 예약 -->
            <articles>
              <div class="brownline">
                <h1 class="re_h1">예약하기</h1>
              </div>
            </articles>
            <h2>PICNIC</h2>
            <div class="multi-select-calendar">
              <div class="calendar"></div>
            </div>
            <div class="box">선택하신 날짜 : 2022-06-13 ~ 2022-06-16</div>
            <div class="reserve-select active">
              <h2>사문진 피크닉장 배치도</h2>
              <img src="./images/sub_reservation/reservation_map.png" alt="" />
              <h2>자리</h2>
              <div class="select-reserve-box">
                <div>
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                  <span>5</span>
                  <span>6</span>
                  <span>7</span>
                  <span>8</span>
                  <span>9</span>
                  <span>10</span>
                </div>
                <div>
                  <span>11</span>
                  <span>12</span>
                  <span>13</span>
                  <span>14</span>
                  <span>15</span>
                  <span>16</span>
                  <span>17</span>
                  <span>18</span>
                  <span>19</span>
                  <span>20</span>
                </div>
                <div>
                  <span>21</span>
                  <span>22</span>
                  <span>23</span>
                  <span>24</span>
                  <span>25</span>
                  <span>26</span>
                  <span>27</span>
                  <span>28</span>
                  <span>29</span>
                  <span>30</span>
                </div>
                <div>
                  <span>31</span>
                  <span>32</span>
                  <span>33</span>
                  <span>34</span>
                  <span>35</span>
                  <span>36</span>
                  <span>37</span>
                </div>
              </div>
            </div>
            <button class="reserve-submit" data-type="PICNIC">예약하기</button>
          </div>
        </div>
      </div>
    </section>

    <!-- 푸터 -->
    <footer>
      <div id="footerBox" class="contents">
        <div class="footertextBox">
          <div>
            <span>사문진 소개</span><span>|</span> <span>이용안내</span
            ><span>|</span> <span>개인정보처리방침</span><span>|</span>
            <span>영상정보처리기기운영방침</span><span>|</span>
            <span>채용안내</span>
          </div>
          <div>
            <h4>(711839)대구광역시 달성군 화원읍 성산리 318-1</h4>
          </div>
          <div>
            <h4>COPYRIGHT © Collabo 4. ALL RIGHT RESERVED.</h4>
          </div>
        </div>
        <div class="footerlogo">
          <img src="./images/main/logo_black.png" alt="logo" />
        </div>
      </div>
    </footer>

    <script src="./js/toggle.js"></script>
    <script src="./js/calender.js"></script>
  </body>
</html>
