< 각 파일의 역할 >

- dbcon.php : DB 연동
- index.php : 첫 페이지
- join_action.php : 회원가입 정보 DB로 전송
- join.html : 회원가입 페이지
- login_action.php : 로그인 가능하게 하기 (DB로 전송하여 일치하는 정보 있는지 확인)
- login_info.php : 로그인 정보 유지(SESSION 이용)
- login.html : 로그인 페이지
- logout.php : 로그아웃시키기(SESSION 이용)
- Myorders.php : DB에서 로그인한 사용자의 주문 내역 받아와서 보여주기
- Order.php : 주문 내역 DB로 전송
- PickYourFlavor.php : DB로부터 알레르기 가능성이 있는 아이스크림 리스트 받아와서 보여주기, 호불호 가능성이 있는 아이스크림 리스트 받아와서 보여주기
- ReviewPost.php : 리뷰 작성할 수 있는 페이지
- Reviews.php : 전체 아이스크림 리스트 받아와서 보여주고 리뷰 남길 수 있는 페이지로 이동할 수 있게 하기
- ReviewSave.php : 리뷰 정보 DB로 전송하기
- ReviewsDetail.php : 각 아이스크림별 리뷰 불러와서 보여주기
- submit.php : PickYourFlavor.php에서 사용자가 체크한 값들 DB로 전송하기
- 기타 추가 설명 : 보고서 및 발표 PPT에 상세히 기술함.