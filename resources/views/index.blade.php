<?php
$arr_movie = array(
	"https://youtu.be/KmafPs7Ljxw",
	"https://youtu.be/HrmWAdF_s6Y",
	"https://youtu.be/Dw1BhP7WJbo",
	"https://youtu.be/0snKAXOdY20",
	"https://youtu.be/_y8Rg4hgF1k",
	"https://youtu.be/vqT7ADQmZ7o",
	"https://youtu.be/10X1siLTuac",
	"https://youtu.be/3sE_YweJ4E4",
	"https://youtu.be/rsUnpWA_kRw",
	"https://youtu.be/YAyfr_mR9rk",
);

$select_index_movie = array_rand($arr_movie);
$select_movie = $arr_movie[$select_index_movie];
echo $select_index_movie."11224444";

$new_arr = array();

$arr_count = 0;
$arr_count++;
${"arr_$arr_count"} = array(
	array($arr_count,"< 웹을 이용한 유틸들 >"),
	array("2022-07-01","2.0","학부모 상담 예약 시스템 (2학기 운영 시작)",
	  	"https://mungkhs.tistory.com/104",
		"https://youtu.be/PoLoiscfgMo",
		"학부모 상담 예약을 편리하게 받을 수 있는 웹사이트",
		"*학부모 상담 예약을 편리하게 받을 수 있는 웹사이트<br>"),
	array("2022-07-09","","(새시스템용)분반(4.1)+일일교육(3.1)+예약(2.2)통합프로그램(이번에는 예약시스템만 업데이트됨",
	  	"https://mungkhs.tistory.com/111",
		"https://youtu.be/5zyyo97DQNk",
		"분반 작업 시간 최소화, 일일교육 관리, 각종 예약 관리",
		"*각 학교에서 사용하는 일일교육 양식 그대템 사용가능함.<br>
		*아침에 컴퓨터 부팅시 자동으로 일일교육이 열리게 됨.<br>
		*특별실 예약 시스템<br>
		*아주 손쉽게 사용할 수 있는 분반시스템<br>
		*위 세 시스템은 각각 별도의 시스템으로 1~2개 시스템만 운영도 가능함<br>
		*(2022.07.09)예약시스템에서 예약가능 특별실(또는 기기) 갯수를 10개에서 무제한으로 늘림."),
	array("2021-08-24","1.0","웹을 이용한 외워쓰기(받아쓰기) 1학년 2학기용, 2학년 1,2학기용",
		"https://mungkhs.tistory.com/category/외워쓰기",
		"",
		"웹을 이용한 스스로 할 수 있는 외워쓰기(받아쓰기) 시스템",
		"*웹을 이용한 외워쓰기(받아쓰기) 시스템<br>
		*현재 1학년 2학기, 2학년 1학기, 2학기 지원<br>"),
);

$arr_count++;
${"arr_$arr_count"} = array(
	array($arr_count,"< 학급 유틸 프로그램 >"),
	array("2020-06-30","1.0","화면 꺼지지 마(nozzz)",
	  	"https://mungkhs.tistory.com/1",
		"https://youtu.be/AR0375hNmu4",
		"화면이 꺼지지 않도록 방지하는 유틸",
		"*수업시간에 가만놔두면 3~5분마다 컴퓨터 화면이 꺼지는 것을 방지해 주는 프로그램"),
	array("2021-05-02","1.7","화면 가리개",
		"https://mungkhs.tistory.com/70",
		"https://youtu.be/fsw0s32nLyM",
		"화면 일부분을 다양한 방법으로 가리거나, 반투명으로 설정",
		"*화면 일부분을 완전히 가리거나, 반투명으로 가릴 수 있음.<br>
		*가리개의 색깔, 투명도를 조정할 수 있음.<br>
		*가리개에 그림 삽입이 가능함.<br>
		*창을 투명하게 하면 창 뒷부분 선택도 가능함.<br>
		*마우스 hover 기능"),

	array("2021-12-05","1.0","화면돋보기",
		"https://mungkhs.tistory.com/103",
		"",
		"화면 일부분을 줌잇의 라이브줌처럼, 하지만 좀더 편리하게 확대 가능",
		"*화면 일부분을 크게 확대시킬 수 있음.<br>
		*zoomit의 라이브줌과 유사한 기능임.<br>"),
	array("2021-11-25","2.0","줌(zoom)출석부",
		"https://mungkhs.tistory.com/101",
		"https://youtu.be/4tYN6RDT8nk",
		"zoom 수업 도중에 참가자를 실시간으로 체크해주는 실시간 출석부",
		"*zoom 수업 도중에 참가자를 실시간으로 체크해줌.<br>
		*입장 시간, 퇴장 시간이 자동 기록됨.<br>
		*출석 기록을 파일로 저장할 수 있음.<br>
		*교과선생님의 경우 각반 학생 명단을 즉시 바꿀 수 있음.<br>
		*결석자 명단 조회<br>"),
	array("2021-11-25","1.0","소리측정기(발표측정기)",
		"https://mungkhs.tistory.com/entry/소리-측정기-발표-측정기",
		"https://youtu.be/LQ5o6QnxHoI",
		"아동의 발표 소리, 교실의 소음도를 측정하여 보여주는 프로그램",
		"*아동의 발표 소리의 크기를 색으로 보여줄 수 있음.<br>
		*교실의 소음도를 측정하여 아이들에게 색으로 보여줄 수 있음.<br>"),
	array("2021-08-20","3.5","가로카메라앱(horizontal camera)-미러링, 무선실물화상기 대용",
	  	"https://mungkhs.tistory.com/82",
		"https://youtu.be/VlWIvaHORGo",
		"스마트폰을 무선실물화상기처럼, 무조건 가로로 실행",
		"*교실에서 TV와 미러링시 무선실물화상기처럼 쓸 수 있음.<br>
		*미러링 기능 지원<br>
		*스마트폰 기본 카메라는 세로 모드만 지원해서 화면이 작게 나오지만, 본 앱은 가로 전용으로 TV화면을 꽉차게 사용할 수 있음.<br>
		*불필요한 버튼이 하나도 없음.<br>
		*실행도중 화면이 꺼지지 않으며, 화면을 잠시 어둡게 할 수 있음. <br>
	    *화면 정지 기능, 선그리기 기능<br>
		*줌 기능, 사진 촬영 기능 "),
	array("2021-08-20","1.0","가로카메라앱 전용 뷰어",
	  	"https://mungkhs.tistory.com/83",
		"https://youtu.be/VlWIvaHORGo",
		"가로카메라앱 전용 뷰어 - 윈조우즈 전용",
		"*가로카메라앱 전용 뷰어<br>
		*미러링 신호가 있으면 자동으로 창이 보여지며, 신호가 없으면 자동으로 창이 최소화됨.<br>"),
);

$arr_count++;
${"arr_$arr_count"} = array(
	array($arr_count,"< NEIS Util >"),
	array("2022-01-28","2.0","NEIS 접속 도우미 - 엣지(Edge)용, EVPN 접속 가능",
	  	"https://mungkhs.tistory.com/110",
		"",
		"나이스 접속시 아이디를 자동으로 입력시켜주는 단순한 유틸, 부팅시 자동 실행 지원",
		"*나이스 접속시 아이디를 자동 입력해주고, 인증서 선택창까지 자동으로 열어주어 편리함.<br>"),
	array("2022-04-01","3.1","나이스 입력 도우미 통합본-탭5번 추가",
	  	"https://mungkhs.tistory.com/107",
		"https://youtu.be/HXi6Ws5UGSg",
		"기존 나이스 입력 유틸 프로그램 통합, 복사 입력 지원",
		"*hwp 파일을 이용한 평어 일괄 입력<br>
		*간편하게 복사 기능을 이용하여 평어,수행 일괄 입력<br>
		*엑셀 파일을 이용한 수행평가 결과 일괄 입력<br>
		*버튼, 숫자키를 이용하여 수행 입력<br>"),
	array("2022-01-27","1.0","나이스 초등 신입생(1학년) 주소 변환 프로그램",
	  	"https://mungkhs.tistory.com/109",
		"https://youtu.be/flRGkXyHcMM",
		"초등 신입생(1학년) 입학대상자 주소변환 기능 제대로 활용하기",
		"*초등 신입생(1학년) 입학대상자 주소변환 기능 활용<br>
		*우편번호, 도로명 주소 자동 변환 <br>
		*나이스에 자동 입력 지원<br>"),
	array("2022-01-27","1.0","탭매크로 프로그램",
	  	"https://mungkhs.tistory.com/108",
		"https://youtu.be/z_JK7-c1Xvc",
		"엑셀과 연동하여 나이스, 기타 다른 곳에 입력을 자동화시킴",
		"*엑셀과 연동<br>
		*엑셀과 연동하여 나이스의 입력을 자동화시킴<br>
		*나이스 뿐만 아니라 다양한 곳에 활용 가능<br>"),
	array("2021-06-24","3.0","자가진단 자동로그인 프로그램",
	  	"https://mungkhs.tistory.com/72",
		"",
		"교사용 자가진단시스템 자동 로그인",
		"*교사용 자가진단시스템에 자동으로 로그인을 해줌.<br>
		*컴퓨터 부팅시 자동으로 실행을 시킬 수 있어 편리함.<br>
		*V3.0-더이상 크롬드라이버를 수정으로 업그레이드 할 필요 없습니다.<br>"),
);

$arr_count++;
${"arr_$arr_count"} = array(
	array($arr_count,"< 메모장 및 윈도우 창 관련 유틸 >"),
	array("2022-02-26","1.0","항상 위 (AlwaysOnTop, 메모장, 기타 어떤 프로그램이든...) 종합판",
		"https://mungkhs.tistory.com/114",
		"https://youtu.be/dk-HkjWMW_8",
		"메모장 또는 어떠한 프로그램이든 항상위로 만들어 주는 프로그램들 5가지",
		"1. 뭐든항상위 (AlwaysOnTopAll) 프로그램<br>
		2. 특정 프로그램 항상위 (AlwaysOnTop_exe) 프로그램<br>
		3. 특정 메모장 항상위 (AlwaysOnTop_work) 프로그램<br>
		4. 메모장 항상위 (AlwaysOnTop_notepad) 프로그램<br>
		5. 보안 회사, 은행 등 보안 때문에 다운로드, usb 복사 등이 불가능할 때 윈도우 자체에서 항상위 구현<br>"),
	array("2022-01-17","1.0","윈도우 자체에서 메모장 항상 위 구현",
		"https://mungkhs.tistory.com/105",
		"",
		"다운로드, usb 복사 등이 필요없어 보안이 중요한 회사에서도 활용 가능-엑셀 또는 파워셀(PowerShell) 활용",
		"*다운로드, usb 복사 등이 필요없어 보안이 중요한 회사에서도 활용 가능<br>
		*엑셀 또는 파워셀(PowerShell) 활용<br>"),
	array("2020-07-21","1.0","메모장 항상 위",
		"https://mungkhs.tistory.com/10",
		"",
		"빈 메모장을 열어 항상위 속성으로 실행시켜 다른 창에 가리지 않도록 해줌",
		"*메모장 프로그램을 항상위 속성으로 실행시켜 다른 창에 가리지 않도록 해줌.<br>"),
	array("2021-03-11","2.0","작업메모장 항상 위",
		"https://mungkhs.tistory.com/61",
		"",
		"미리 저장해둔 있는 작업.txt 파일을 항상위 속성으로 열어줌.",
		"*미리 저장해둔 있는 작업.txt 파일을 항상위 속성으로 열어줌.<br>"),
	array("2020-08-02","2.0","멍메모장",
		"https://mungkhs.tistory.com/17",
		"https://youtu.be/JgnqNxA532M",
		"메모장이지만, 글씨체, 크기, 글씨를 바꿀 수 있고, 테두리가 없는 넓은 메모장",
		"*제목표시줄과 메뉴, 아래쪽 상태표시줄이 없어 화면을 넓게 사용함.<br>
		*내용 일부분의 글씨체, 글씨 크기, 글씨 색깔을 수정할 수 있음.<br>
		*그림 입력이 가능함.<br>
		*기본으로 항상 위 고정 속성을 가지고 있음.<br>
		*배경색 변경 및 창 투명도 조정이 가능함.<br>"),
	array("2020-08-02","2.0","To.멍메모장 프로그램",
		"https://mungkhs.tistory.com/17",
		"https://youtu.be/tvy2tseB1Mc",
		"멍메모장에 한글자 한글자 타자를 치듯 입력되는 효과를 나타낼 수 있음",
		"*멍메모장에 한글자 한글자 타자를 치듯 입력되는 효과를 나타낼 수 있음.<br>"),
	array("2021-02-14","1.0","항상위로",
		"https://mungkhs.tistory.com/69",
		"",
		"원하는 실행파일을 항상위 속성으로 열 수 있게 함.",
		"*원하는 실행파일을 항상위 속성으로 열 수 있음.<br>
		 (단, 현재는 단일 실행파일만 가능함.)<br>
		*아래 있는 창문관리 프로그램은 열려있는 창의 속성을 조정하는 것이고, 본 프로그램은 처음부터 실행시킬 때 항상위 속성으로 열리게 하는 것임.<br>"),
	array("2020-07-29","1.3","창문 관리 프로그램",
		"https://mungkhs.tistory.com/12",
		"",
		"열려있는 프로그램 창들을 선택적으로 항상위, 모니터 이동, 투명도 조정",
		"*열려있는 프로그램 창들을 선택적으로 항상위로 고정시킬 수 있음.<br>
		*다중 모니터일 경우 특정 창을 다른 모니터로 즉시 가져올 수 있음.<br>
		*열려있는 프로그램 창의 투명도를 조정할 수 있음.<br>"),
);

$arr_count++;
${"arr_$arr_count"} = array(
	array($arr_count,"< QR, barcode, NFC 관련 유틸 >"),
	array("2022-07-05","1.0","BarQrNfcToPc 안드로이드 앱",
	  	"https://mungkhs.tistory.com/117",
		"https://youtu.be/_THwTOoqPCc",
		"안드로이드 스마트폰을 Barcode, QR, NFC 리더기로 사용할 수 있도록 해줌.",
		"*사용하지 않는 구형 스마트폰을 리더기로 만들어줌.<br>
	    *블루투스 또는 와이파이 연결로 무선으로 사용 가능함.<br>"),
	array("2022-07-05","2.0","BarQrNfcToPc 윈도우용 프로그램",
	  	"https://mungkhs.tistory.com/118",
		"https://youtu.be/_THwTOoqPCc",
		"스마트폰에서 Barcode, QR, NFC를 읽어 PC로 전송받는 프로그램",
		"*스마트폰에서 인식된 값을 컴퓨터에서 전송받는 역할을 함.<br>
	    *블루투스 또는 와이파이 연결로 무선으로 사용 가능함.<br>
	    *입력된 값을 엑셀이나 기타 다른 프로그램에 전달해줌.<br>
		*클123QR 프로그램으로도 값 전송 가능.<br>"),
	array("2022-01-26","1.2","스크린 Ocr Qr",
	  	"https://mungkhs.tistory.com/106",
		"https://youtu.be/CcvPTu9HLZM",
		"화면에 보이는는 모든 것을 텍스트로, 번역도 가능, QR인식, 표는 엑셀로 변환",
		"*컴퓨터 모니터(화면)에 보여지는 것을 캡춰하여 OCR 기능을 이용하여 텍스트로 변환시켜줌.<br>
	    *화면에 있는 QR 코드를 바로 인식할 수 있음.<br>
	    *앞에서 텍스트로 인식된 결과를 바로 번역해 볼 수 있음.<br>
		*V1.2-표 인식 후 엑셀로 변환 가능<br>"),
	array("2020-09-07","1.5","멍 QR 생성기",
	  	"https://mungkhs.tistory.com/18",
		"",
		"유튜브 주소 변환, 주소에 대한 QR 생성, QR 읽기 가능",
		"*유튜브 주소 변환이 가능함.<br>
		*주소에 대한 QR코드 생성이 가능함.<br>
		*QR코드에 학교나 개인의 로고 삽입이 가능함.<br>
		*컴퓨터 문서에 들어있는 QR코드를 스마트폰 촬영이 필요없이 컴퓨터에서 직접 열어볼 수 있음.<br>
	    *컴퓨터 문서에 들어있는 클릭할 수 없는 영문 주소를 읽어낼 수 있음."),
	array("2020-09-07","2.0","멍 QR 생성기 v2.0(인디스쿨 로그인 필수)",
	  	"https://indischool.com/31",
		"",
		"네이버 단축주소 생성 가능 + 위 1.5버전 기능 포함",
		"*단축주소 생성기능이 있음.<br>
		*그 외에는 위 멍QR 1.5버전과 동일한 기능을 가지고 있음.<br>"),
	array("2021-08-03","2.1","BarQR리더기",
	  	"https://mungkhs.tistory.com/79",
		"https://youtu.be/MXv6LpqhV0s",
		"컴퓨터에서 바코드, QR코드를 읽어 엑셀로 입력값 전달",
		"*교실에 있는 실물화상기, 화상캠을 이용하여 QR코드나 바코드를 읽어낼 수 있음.<br>
		*읽어낸 값을 엑셀이나 한글 파일 등에 자동으로 입력 받을 수 있음.<br>
		*시간 간격을 두고 연속으로 계속 인식을 시킬 수 있음.<br>
		*엑셀을 잘 활용하실 수 있다면, 아이들 각각의 QR코드를 생성 후 아이들이 직접 QR코드를 실물화상기에 대어
		검사한 사람 기록 표시 등을 할 수 있을 것입니다.<br>"),
	array("2022-07-05","5.0","클123QR 프로그램",
	  	"https://mungkhs.tistory.com/119",
		"https://youtu.be/4FnQ6JGkdKg",
		"학생의 QR코드를 읽어 클래스123에 자동 체크해주는 프로그램",
		"*교실에 있는 실물화상기, 화상캠을 이용하여 학생의 QR코드를 읽으면, 클래스123 사이트의 해당 아동이 자동으로 체크가 됨.<br>
		*바코드 스캐터(2D 인식이 가능해야 함)<br>
		*NFC 리더기를 이용하여 NFC 카드 및 태그도 이용 가능<br>
		*인식시 소리 기능 추가, 항상위 기능 있음<br>
		*인식 소리로 사용할 녹음기 기능 추가<br>
		*BarQrNfcToPc 프로그램과 연동 가능함.<br>"),
	array("2021-06-29","1.2","QR 일괄 생성기",
	  	"https://mungkhs.tistory.com/76",
		"https://youtu.be/ndUwnWd1JFk",
		"학생용 QR코드를 손쉽게 일괄로 생성",
		"*학생용 QR코드를 손쉽게 일괄로 생성할 수 있음.<br>"),
	array("2021-07-26","1.2","작품 촬영기",
	  	"https://mungkhs.tistory.com/78",
		"https://youtu.be/y-VBsZ6KSFw",
		"QR을 붙인 작품을 컴퓨터에서 읽어들으며 자동으로 파일 이름 설정",
		"*교실에 있는 실물화상기, 화상카메라를 이용해 작품을 찍을 수 있음.<br>
		*사진 촬영 간격 시간을 조정해서 반복적으로 자동으로 사진을 찍을 수 있음. (단, QR코드가 인식되어야만 사진이 촬영됨.)<br>
		*사진 속 QR코드를 인식하여 자동으로 파일 이름을 만들어줌. (다양한 형태로 이름을 만들 수 있음)<br>
		*스마트폰으로 찍은 사진(QR코드가 포함된)도 폴더째로 불러들여 자동으로 QR인식을 시킨 후 파일명을 자동적으로 붙여줄 수 있음.<br>"),
	array("2021-08-05","2.0","클456QR 프로그램",
	  	"https://mungkhs.tistory.com/80",
		"https://youtu.be/SMyK-006pSk",
		"클456엑셀과 연동이 되는 클123QR과 유사한 프로그램",
		"*클456엑셀과 연동이 됨<br>
		*클123QR과 유사한 프로그램<br>"),
	array("2021-08-10","1.0","클456엑셀 프로그램(매크로 파일)",
	  	"https://mungkhs.tistory.com/81",
		"https://youtu.be/NkEllnHRBDQ",
		"클456QR 프로그램과 연동되는 엑셀 체크 프로그램",
		"*엑셀 매크로 파일임.<br>
		*클래스123 같은 체크 프로그램<br>
		*사진 삽입 가능<br>
		*버튼 위치 변경 가능<br>"),
);

$arr_count++;
${"arr_$arr_count"} = array(
	array($arr_count,"< 학교 및 기타 유틸 >"),
	array("2021-10-24","1.0","WiFi QR 생성기 프로그램",
	  	"https://mungkhs.tistory.com/88",
		"",
		"WiFi QR 코드를 생성하는 윈도우용 프로그램",
		"*WiFi QR을 생성할 수 있음.<br>
		*QR 코드에 로고 및 설명글을 삽입시킬 수 있음.<br>"),
	array("2021-10-24","1.0","Easy WiFi Connector 앱 (using QR)",
	  	"https://mungkhs.tistory.com/89",
		"",
		"WiFi QR을 촬영하면 바로 wifi에 접속이 되는 안드로이드 앱",
		"*안드로이드앱<br>
		*WiFi QR을 촬영하면 바로 접속이 가능함.<br>
		*WiFi 정보를 손쉽게 삭제할 수 있음.<br>"),
	array("2021-10-31","1.0","Easy WiFi Connector 프로그램 (using QR)",
	  	"https://mungkhs.tistory.com/92",
		"",
		"WiFi QR을 촬영하면 바로 wifi에 접속이 되는 윈도우즈 프로그램",
		"*윈도우즈용<br>
		*WiFi QR을 촬영하면 바로 접속이 가능함.<br>
		*WiFi 정보를 손쉽게 삭제할 수 있음.<br>"),
	array("2020-08-05","1.0","경력계산기(엑셀)",
	  	"https://mungkhs.tistory.com/18",
		"",
		"경력계산을 해주는 엑셀파일",
		"*경력계산을 해주는 엑셀파일.<br>"),
	array("2021-04-03","1.1","Scoman (기자재 관리 프로그램)",
	  	"https://mungkhs.tistory.com/63",
		"",
		"교내 컴퓨터의 사양 등을 손쉽게 수집하여 관리할 수 있음.",
		"*교내 컴퓨터의 사양 등을 손쉽게 수집할 수 있음.<br>"),
	array("2021-01-28","1.0","컴퓨터정보(이름, 작업그룹, 아이피 등..) 수정 프로그램",
	  	"https://mungkhs.tistory.com/44",
		"",
		"교실 컴퓨터정보(이름, 작업그룹, 아이피 등..)을 누구나 손쉽게 바꿀 수 있음.",
		"*컴퓨터정보(이름, 작업그룹, 아이피 등..)을 손쉽게 바꿀 수 있음.<br>
		*매년 교실이 바뀐 학기초에 담임선생님께 보내 직접 수정하게 할 수 있도록 쉽게 사용할 수 있음.<br>")
);

/*
$conn = mysqli_connect("localhost", "username", "password" , "dbname");

$today = date("Ymd");
$yesterday = date('Ymd',mktime(0,0,0,substr($today,4,2),substr($today,6,2)-1,substr($today,0,4)));

$sql = "select count(*) from table_name where date=".$today;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);

if ($row[0] != 0) {
	if($_COOKIE['counter_add'] != '1') {
		$sql = "update table_name set visit = visit + 1 where date=".$today;
		$result = mysqli_query($conn, $sql);
		setcookie("counter_add", "1", time()+60*60*24, "/");
	}

} else {
	$sql = "INSERT INTO table_name (date,site,visit) VALUES ('$today',1,1)";
	$result = mysqli_query($conn, $sql);
}


$sql = "select sum(visit) As count from table_name";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total = $row['count']+20000;

$sql = "select sum(visit) As count from table_name where date=".$yesterday;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$yessum = $row['count'];

$sql = "select sum(visit) As count from table_name where date=".$today;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$tosum = $row['count'];
*/

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>🐾자 멍멍쌤 홈</title>
<!--
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
-->
<link href="/app.css" rel="stylesheet">

<script>
  if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
    window.location = 'microsoft-edge:' + window.location;

    setTimeout(function() {
      window.location = 'https://go.microsoft.com/fwlink/?linkid=2135547';
    }, 1);
  }
</script>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript">
$(function(){
 $('.data').mouseover(function(e) { // mouse hover 좌표
  $(this).mousemove(function(e) {
   var idx = $(this).attr("idx");
   //$('#divLayer_' + idx + ' #title').empty().append($(this).attr("l_name")); // div Layer title의 값을 data의 l_name 값으로 치환한다.
   //$('#divLayer_' + idx + ' #name').empty().append($(this).attr("wr_name")); // div Layer title의 값을 data의 wr_name 값으로 치환한다.
   $('#divLayer_' + idx + ' #content').empty().append($(this).text());

   var t=e.pageY-15;
   var l=e.pageX+20;
   //$('#divLayer').css({"top":t, "left":l,"position":"absolute","opacity":"0,8" }).show();
   $('#divLayer_'+idx).css({"top":t, "left":l,"position":"absolute","opacity":"0,8" }).show();
  });
 });
 $('.data').mouseout(function() {
   var idx = $(this).attr("idx");
   //$('#divLayer').hide();
   $('#divLayer_'+idx).hide();
 });
});

jQuery( function() {
  jQuery( '#background' ).YTPlayer();
});
</script>


<style>
.overLayer{z-index:100;display: none; width: 400px; height: 250px; border: 2px solid gray; background-color:#FFF; padding:10px; font-size:14px; line-height:20px; font-weight:100}

a {	text-decoration: none; color: white; }
a:visited { text-decoration: none; }
a:hover { text-decoration: none; }
a:focus { text-decoration: none; }
a:hover, a:active { text-decoration: none; }
td {color:white;font-weight: 700;font-size:14pt;text-shadow: 2px 2px 2px black;}

#video {
  position: sticky;
     top: 0px;
     left: 0px;
     min-width: 100%;
     min-height: 100%;
     width: 120%;

     z-index: -1;
     overflow: hidden;
}

.box {
  display: inline-block;
  position: sticky;
  top: 0px;
  width: 100%;
  height: 0;
     z-index: -1;
}

.p_new {
        background-color: rgba( 255, 167, 167, 0.3 );
  }

.p_title {
		position: sticky;
        background-color: rgba( 050, 002, 204, 0.3 );
  }

.p1 {
        background-color: rgba( 000, 102, 204, 0.3 );
  }

.p2 {
        background-color: rgba( 102, 255, 204, 0.3 );
  }

.p3 {
        background-color: rgba( 000, 102, 204, 0.3 );
  }

.p4 {
        background-color: rgba( 102, 255, 204, 0.3 );
  }

.p5 {
        background-color: rgba( 000, 102, 204, 0.3 );
  }

.p6 {
        background-color: rgba( 050, 050, 255, 0.3 );
  }

#background {
  z-index: -1;
}
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KHPR0W2EZX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KHPR0W2EZX');
</script>


</head>
<body topmargin="0"  leftmargin="0" marginwidth="0" marginheight="0">

<div id="background" class="player" data-property="{
  videoURL: '<?php echo $select_movie?>',
  mute: true,
  showControls: false,
  useOnMobile: true,
  quality: 'highres',
  containment: 'body',
  loop: true,
  autoPlay: true,
  stopMovieOnBlur: false,
  startAt: 0,
  opacity: 1
}">
</div>

<div class='p_title' style="left: 0px;width:100%;">
	<table border=0 width=100%>
		<tr>
			<td>
				<font size=6 color=white>
					&nbsp;멍멍쌤의 취미생활<br>
				</font>
			</td>
            <?php
            /*
            <td align=center valign=bottom>
				<font size=3 color=white>
				<?echo "오늘:".$tosum.", 어제:".$yessum.", 전체:".$total." (since 2003)";?>
				</font>
			</td>
            */?>
			<td align=right valign=bottom>
				<font size=4 color=white>
					<a href='https://mungssem.kr/photo/port/port.php' target=_Blank>추억의 취미 작품집 보기</a>&nbsp;&nbsp;&nbsp;<br>
				</font>
			</td>
			<td align=right valign=bottom>
				<font size=4 color=white>
					<a href='https://mungkhs2.cafe24.com/rb/?r=home' target=_Blank>옛날 멍멍홈 방문</a>&nbsp;&nbsp;&nbsp;<br>
				</font>
			</td>
		</tr>
	</table>
</div>

<p>
<br>
<p>

<div class='p_new' style="left: 0px;width:100%;">
<br>
	<table border=0 width=100% align=center>
		<tr>
			<td>
				<p align=center><font size=5>
				<b> < 최근 업그레이드 현황 > </b>
				</font>
				</p>
			</td>
		</tr>
	</table>
	<table border=0 width=90% align=center>
		<tr><td>&nbsp;</td></tr>

<!--///임의 추가 내용-->
		<tr>
			<td>
			<p>
                <a href='https://indischool.com/boards/announcement/37251001?page=2' target='_Blank'>

			<img src='/images/ball.gif'> 요즘 하고 있는 취미생활
			=> 여름방학 부터 당분간 계속 쪼랩(인디스쿨 취미 코딩 커뮤니티)에서 라라벨(laravel) 공부중입니다. 그래서, 잠시 모든 개발을 멈추게 되어습니다. 추후 라라벨 공부가 끝나면 다시 취미 개발을 시작할 예정입니다.</a></p>
			<p>

			</td>
		</tr>


		<tr><td style='text-indent:-3em; padding:10px 10px 10px 60px;'>
<?php
$timenow = date("Ymd");

for ($m=1;$m<$arr_count;$m++) {
	$tmparr = ${"arr_$m"};
	for ($n=1;$n<sizeof($tmparr);$n++) {
		$timetarget = $tmparr[$n][0];
		$dateDifference = abs(strtotime($timenow) - strtotime($timetarget));
		$days = floor($dateDifference / (60 * 60 * 24));
		if ($days < 30) {

			array_push($tmparr[$n], $tmparr[0][0], $n);
			array_push($new_arr, $tmparr[$n]);
		}
	}
}

for ($k=0;$k<sizeof($new_arr)-1;$k++) {
	for ($a=$k+1;$a<sizeof($new_arr);$a++) {
		if ($new_arr[$k][0] < $new_arr[$a][0]) {
			$tmp = $new_arr[$k];
			$new_arr[$k] = $new_arr[$a];
			$new_arr[$a] = $tmp;
		}
	}
}


for ($k=0;$k<sizeof($new_arr);$k++) {
	echo "<p>\n";
	echo "<a href='".$new_arr[$k][3]."' target='_Blank' class='data' idx='".$new_arr[$k][7]."_".$new_arr[$k][8]."'>\n";
	echo "<img src='/images/ball.gif'> ";
	echo $new_arr[$k][2]." V".$new_arr[$k][1]." (".$new_arr[$k][0].") </a>\n";
	if ($new_arr[$k][4] != "" ) {
		echo "<a href='".$new_arr[$k][4]."' target='_Blank'><img src='/images/youtube1.png' width=50></a>\n";
	}
	echo " => ".$new_arr[$k][5];
	echo "</p>\n";
}



?>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
	</table>
</div>

<p>
<br>
<p>

<?php
for ($k=1;$k<=$arr_count;$k++) {
	$arrnum = $k;
	$arr = ${"arr_$arrnum"};

		echo "<div class='p".$arr[0][0]."' style='left: 0px;width:100%;'>\n";
		echo "<br>\n";
		echo "<table border=0 cellspacing=0 cellpadding=0 width=90% align=center class=aa>\n";
		echo "	<tr>\n";
		echo "		<td valign=top  style='text-indent:-3em; padding:10px 10px 10px 60px;'>\n";
		echo "<p align=center><font size=5><b> ".$arr[0][1]." </b></p></font><br>\n";

		for ($i=1; $i< sizeof($arr); $i++) {
			echo "<p>\n";
			echo "<a href='".$arr[$i][3]."' target='_Blank' class='data' idx='".$arr[0][0]."_".$i."'>\n";
			$timetarget = $arr[$i][0];
			$dateDifference = abs(strtotime($timenow) - strtotime($timetarget));
			$days = floor($dateDifference / (60 * 60 * 24));
			echo "<img src='/images/ball.gif'> ";
			if ($days < 30) {
				echo "<img src='./banner/new.gif' width=30>\n";
			}
			echo $arr[$i][2]." V".$arr[$i][1]." (".$arr[$i][0].") </a>\n";
			if ($arr[$i][4] != "" ) {
				echo "<a href='".$arr[$i][4]."' target='_Blank'><img src='/images/youtube1.png' width=50></a>\n";
			}
			echo " => ".$arr[$i][5];
			echo "</p>\n";
		}


		echo "	  <br>\n";
		echo "  </td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div>\n";

		//레이어 도움말
		for ($j=1;$j<sizeof($arr);$j++) {
			echo "<div id='divLayer_".$arr[0][0]."_".$j."' class='overLayer'>\n";
			echo "	<br>\n";
			echo "	<div class='content'>\n";
			echo "		<strong><span id='content'>제목</span></strong>\n";
			echo "		<br><br>\n";
			echo $arr[$j][6];
			echo "	</div>\n";
			echo "</div>\n";
		}

		echo "<p>";
		echo "<br>";
		echo "<p>";
}
?>

<p align=center>&nbsp;</p>
<p align=center>&nbsp;</p>
<p align=center>&nbsp;</p>
<p align=center>&nbsp;</p>
<p align=center>&nbsp;</p>

</body>
</html>
