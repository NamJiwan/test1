
<!doctype html>
<html lang="ko">
<head>
<script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
<script type="text/javascript">
  var naver_id_login = new naver_id_login("_eKCYA0sQZDO7VLHX24d", "https://elaborate-nasturtium-7ef512.netlify.app/naver_callback.php");
  // 접근 토큰 값 출력
  //alert(naver_id_login.oauthParams.access_token);
  console.log(naver_id_login.oauthParams.access_token);
  console.log(naver_id_login.getProfileData());
  // 네이버 사용자 프로필 조회
  naver_id_login.get_naver_userprofile("naverSignInCallback()");
  // 네이버 사용자 프로필 조회 이후 프로필 정보를 처리할 callback function
  function naverSignInCallback() {
    //alert(naver_id_login.getProfileData('name'));
    //alert(naver_id_login.getProfileData('email'));
    //alert(naver_id_login.getProfileData('nickname'));
    //alert(naver_id_login.getProfileData('age'));
    // document.write(naver_id_login.getProfileData('name'));
    // document.write(naver_id_login.getProfileData('email'));
    console.log(naver_id_login.getProfileData('name'));
    console.log(naver_id_login.getProfileData('email'));
    console.log(naver_id_login.getProfileData('nickname'));
    console.log(naver_id_login.getProfileData('age')); 
    
  }
</script>

</body>
</html>