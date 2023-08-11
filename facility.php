<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>사문진 시설</title>
    <link rel="stylesheet" href="./css/heaader.css" />
    <link rel="stylesheet" href="./css/facility.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/toggle.css" />
    <!-- 폰트어썸 CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  </head>
<!-- asdf -->
  <body>
    <header>.
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
              <li>시설</li>
              <li><a href="./map.php">오시는 길</a></li>
              <li><a href="./reserve.php">예약</a></li>
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
        <a href="./index.php"><i class="fa-solid fa-house"></i></a>
        <ul class="lnb">
          <li><a href="./about.php">소개</a></li>
          <li>시설</li>
          <li><a href="./map.php">오시는 길</a></li>
          <li><a href="./reserve.php">예약</a></li>
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

    <section id="darkImg">
      <div>
        <img src="./images/sub_facility/facility_main.jpg" alt="" />
      </div>
      <h1>Facility</h1>
    </section>

    <section class="contents">
      <div id="class_wrapper">
        <div class="wrapper" id="class_tab">
          <input id="class_1" type="radio" name="class_tap" checked="checked" />
          <input id="class_2" type="radio" name="class_tap" />
          <input id="class_3" type="radio" name="class_tap" />
          <input id="class_4" type="radio" name="class_tap" />

          <section class="class_buttons contents">
            <label for="class_1">
              <h1>사문진 유람선</h1>
            </label>
            <label for="class_2">
              <h1>사문진 피크닉장</h1>
            </label>
            <label for="class_3">
              <h1>사문진 주막촌</h1>
            </label>
            <label for="class_4">
              <h1>화원동산</h1>
            </label>
          </section>
          <!-- 페이지 -->
          <div class="class_tab_item">
            <div class="page">
              <h1>사문진 유람선</h1>
              <img src="./images/sub_facility/ferry/facility_ferry.jpg" alt="" />
              <div class="brownline">
                <h2>사문진 유람선 소개</h2>
              </div>
              <p>선박명 : 달성호</p>
              <p>운항구간: 사문진 - 강정보 - 옥포신당 - 사문진</p>
              <p>승선시간 : 40분</p>
              <p>
                휴무일 : 월요일 ( 정기 휴무일이 공휴일인 경우 다음날 휴무 실시,
                <span>동절기는 월용일, 화요일</span>)
              </p>
            </div>
            <div class="brownline">
              <h2>요금 안내</h2>
            </div>
            <table class="">
              <thead>
                <tr>
                  <th rowspan="2">대상</th>
                  <th colspan="2">평일</th>
                  <th colspan="2">주말</th>
                </tr>
                <tr>
                  <th>개인</th>
                  <th>할인</th>
                  <th>개인</th>
                  <th>할인</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>대인</td>
                  <td>8,000</td>
                  <td>5,000</td>
                  <td>10,000</td>
                  <td>8,000</td>
                </tr>
                <tr>
                  <td>소인<br /><text>36개월 ~ 초등학생</text></td>
                  <td>5,000</td>
                  <td>4,000</td>
                  <td>7,000</td>
                  <td>5,000</td>
                </tr>
              </tbody>
            </table>

            <div class="brownline">
              <h2>운항 시간</h2>
            </div>
            <table>
              <thead>
                <tr>
                  <th>구분</th>
                  <th>출발시간</th>
                  <th>비고</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="9">유람선<br /><text>(사문진 계류장)</text></td>
                </tr>
                <tr>
                  <td>10:00</td>
                  <td class="redtext">동절기에만 운항</td>
                </tr>
                <tr>
                  <td>11:00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>13:00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>14:00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>15:00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>16:00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>17:00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>18:00</td>
                  <td class="redtext">비동절기에만 운항</td>
                </tr>
              </tbody>
            </table>
            
              <div class="buttonbox">
                <a href="/reserve.php">
                  <button>
                    <h2>예매하기</h2>
                  </button>
                </a>
              </div>
            
          </div>
          <div class="class_tab_item" id="#picnic_facillity">
            <div class="page">
              <h1>사문진 피크닉장</h1>
              <div>
                <img
                  src="./images/sub_facility/picnic/facility_picnic.jpg"
                  alt=""
                />
                <div class="rowbox">
                  <div class="halfbox">
                    <div class="brownline">
                      <h2>피크닉장</h2>
                    </div>
                    <p>위치 : 대구광역시 달성군 화원읍 성산리 330번지 일원</p>
                    <p>
                      주요시설 : 평상 37개(대:10개(6mx4m), 소:27개(4.6mx3.3m))
                    </p>
                  </div>

                  <div class="halfbox">
                    <div class="brownline">
                      <h2>요금 안내</h2>
                    </div>
                    <p>- 평상(대) 15,000원</p>
                    <p>- 평상(소) 10,000원</p>
                  </div>
                </div>
                <div class="rowbox">
                  <div class="halfbox">
                    <div class="brownline">
                      <h2>예약 및 이용안내</h2>
                    </div>
                    <text>요금</text>
                    <p>
                      - 사문진피크닉장 관리초소에서 예약자 확인, 사용료 지불 후
                      이용 가능
                    </p>
                    <p>
                      -사문진 홈페이지에서 예매, 관리초소에서 예약자 확인 후
                      이용 가능
                    </p>
                    <text>이용시간 10:00 ~ 18:00</text>
                    <text>예약방법</text>
                    <p>-온라인예약</p>
                    <a href="./reserve.php">
                      <button class="nomargin">
                        <h2>예매하기</h2>
                      </button>
                    </a>
                    <p>
                      - 유선 예약: 053-635-7112 (피크닉장)<br />
                      예약 및 이용문의 시간
                    </p>
                  </div>
                  <div class="halfbox">
                    <div class="brownline">
                      <h2>운항 시간</h2>
                    </div>
                    <text>운영기간 : 3월 ~ 11월 </text>
                    <text>운영시간 : 10:00 18:00 </text>
                    <text>휴무일</text>
                    <p>
                      - 월요일 (정기 휴무일이 공휴일인 경우 다음날 휴무 실시)
                    </p>
                    <p>- 12월부터 2월까지 동절기 휴무</p>
                    <text class="redtext">야영금지, 숯불 사용 금지</text>
                  </div>
                </div>

                <div class="rowbox">
                  <div class="halfbox">
                    <div class="brownline">
                      <h2>사문진 피크닉장 배치도</h2>
                    </div>
                    <div class="col2">
                      <div class="sero">
                        <div class="yellow"></div>
                        <p class="p2">대형 평상</p>
                      </div>
                      <div class="sero">
                        <div class="blue"></div>
                        <p class="p2">소형 평상</p>
                      </div>
                    </div>
                    <div class="col2">
                      <div class="sero">
                        <div class="yellow"></div>
                        <p class="p2">화장실</p>
                      </div>
                      <div class="sero">
                        <div class="blue"></div>
                        <p class="p2">관리실</p>
                      </div>
                    </div>
                  </div>
                  <img
                    src="./images/sub_facility/picnic/facility_map.png"
                    alt=""
                  />
                </div>
                <div class="rowbox">
                  <div>
                    <div class="brownline">
                      <h2>유의사항</h2>
                    </div>
                    <p>- 피크닉장에서는 야영(숙박)을 할 수 없습니다.</p>
                    <p>- 주차장은 강변주차장을 이용하시기 바랍니다.</p>
                    <p>
                      - 쓰레기는 쓰레기종량제봉투에 담아 지정된 장소에 버려
                      주시기 바랍니다.
                    </p>
                    <p>- 피크닉장 내에서는 금연입니다.</p>
                    <p>
                      - 애완동물 동반시 목줄을 반드시 착용하고, 배설물이 생긴
                      때에는 꼭 수거 해야 합니다.
                    </p>
                    <p>- 보행로 위에는 돗자리를 펼칠 수 없습니다.</p>
                    <p>
                      - 귀중물품 분실시 본인의 책임이며 공공기물 파손시 손해
                      배상을 해야 합니다.
                    </p>
                    <p>- 임산물, 야생초화류 등의 무단 채취를 금지합니다.</p>
                    <p>- 12시까지 미입장시 예약이 취소됩니다.</p>
                  </div>
                  <div class="noimg">
                    <img src="./images/sub_facility/picnic/no.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="class_tab_item">
            <div class="page">
              <h1>사문진 주막촌</h1>
              <img src="./images/sub_facility/jumak/jumak.jpg" alt="" />
              <div class="rowbox">
                <div class="halfbox">
                  <div class="brownline">
                    <h2>피크닉장</h2>
                  </div>
                  <p class="picnictext1">
                    2013년 11월 팽나무를 배경으로 삼아 옛터 2,600여 평부지에
                    한옥 형태의 전통 주막 3채를 새롭게 단장해 사문진 주막촌 개장
                    현재는 500년 된 팽나무와 대형 피아노장승, 오리솟대, 피아노
                    유입 기념비 및 임자 없는 나룻배 촬영지 기념비, 시등, 세족대,
                    부유식 계류장, 피아노 광장 등 볼거리가 가득한 명품
                    휴식공간으로 조성
                  </p>
                </div>

                <div class="halfbox">
                  <div class="brownline">
                    <h2>요금 안내</h2>
                  </div>
                  <p>- 11 : 30 ~ 19 : 00 (3 ~ 11월)</p>
                  <p>- 11 : 30 ~ 18 : 30 (1, 2, 12월)</p>
                  <p>계절 및 현장 사정에 따라 운영시간은 변동될 수 있음</p>

                  <p class="redtext">
                    주막촌 정기휴무일 : 월요일(정기 휴무일이 공휴일인 경우
                    다음날 휴무 실시)
                  </p>
                  <p class="redtext">
                    브레이크 타임<br />
                    평일 15:00 ~ 16:00<br />
                    주말 및 공휴일 15:30 ~ 16:00
                  </p>
                </div>
              </div>
              <div class="brownline">
                <h2>사문진 주막촌 메뉴</h2>
              </div>
              <div class="mainbox">
                <div class="secbox">
                  <div class="row">
                    <div class="gukbobbox">
                      <img src="./images/sub_facility/jumak/gukbob.png" alt="" />
                      <h3>사문진 소고기 국밥</h3>
                      <p>보글보글 끓여 먹는 든든한 소고기 국밥</p>
                    </div>
                    <div class="col">
                      <div>
                        <img
                          src="./images/sub_facility/jumak/noodle.jpg"
                          alt=""
                        />
                        <h3>사문진 잔치국수</h3>
                        <p>멸치육수를 우려내 시원한 맛이 일품인 잔치국수</p>
                      </div>
                      <div>
                        <img
                          src="./images/sub_facility/jumak/maemil.jpg"
                          alt=""
                        />
                        <h3>사문진 메밀전병</h3>
                        <p>속이 꽉 차서 더 맛있는 메밀전병</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div>
                      <img src="./images/sub_facility/jumak/buchu.jpg" alt="" />
                      <h3>사문진 부추전</h3>
                      <p>향긋한 부추 향기와 바삭한 식감의 부추전</p>
                    </div>
                    <div class="dububox">
                      <img src="./images/sub_facility/jumak/dubu.jpg" alt="" />
                      <h3>사문진 손두부</h3>
                      <p>고소한 손두부 위에 새콤한 김치를 올려 먹어보자</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="class_tab_item">
            <div class="page">
              <h1>화원동산</h1>
              <img src="./images/sub_facility/hwawon/hwawon.jpg" alt="" />
              <div class="rowbox">
                <div class="halfbox">
                  <div class="brownline">
                    <h2>화원동산 소개</h2>
                  </div>
                  <p>위치 : 대구과역시 달성군 화원읍 사문지놀 1길 40-12</p>
                  <p>
                    주요시설 : 동물원, 잔디광장, 전망대, 수경시설, 주차장 등
                  </p>
                </div>
                <div class="halfbox">
                  <div class="brownline">
                    <h2>주요시설 현황</h2>
                  </div>
                  <p>- 동물원 : 사슴, 토끼 등</p>
                  <p>- 잔디광장 : 12,231m2</p>
                  <p>- 전망대 : 324m2 (4층)</p>
                  <p>수경시설 : 연못 및 분수대</p>
                  <p>수목현황 : 모감주 나무 (천연보호림)등 19,906그루</p>
                  <p>- 주차장 : 5,130m2</p>
                </div>
              </div>
              <div class="halfbox">
                <div class="brownline">
                  <h2>주요시설 현황</h2>
                </div>
              </div>
              <div class="hawon">
                <div class="rowbox">
                  <img
                    src="./images/sub_facility/hwawon/hwawon1.jpg"
                    alt=""
                  />
                  <img
                    src="./images/sub_facility/hwawon/hwawon2.jpg"
                    alt=""
                  />
                </div>
                <div class="rowbox">
                  <img
                    src="./images/sub_facility/hwawon/hwawon3.jpg"
                    alt=""
                  />
                  <img
                    src="./images/sub_facility/hwawon/hwawon4.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
  </body>
</html>
