<?php
$data = json_decode(file_get_contents('php://input'),true);
$content = $data["content"];

// 급식
if($content == "급식"){
echo <<< EOD
    {
        "message": {
            "text": "급식을 선택하세요."
        },
        "keyboard": { 
            "type": "buttons",
            "buttons": [
                "오늘 급식",
                "내일 급식",
                "처음으로"
            ]
        }
    }
EOD;
}

// 날씨
elseif($content == "날씨"){
echo <<< EOD
    {
        "message": {
            "text": "날씨는 {weather}도 입니다."
        },
        "keyboard": { 
            "type": "buttons",
            "buttons": [
                "급식",
                "날씨",
                "자유대화"
            ]
        }
    }
EOD;
}

// 처음으로
elseif($content == "처음으로"){
echo <<< EOD
    {
        "message": {
            "text": "메인입니다."
        },
        "keyboard": { 
            "type": "buttons",
            "buttons": [
                "급식",
                "날씨",
                "자유대화"
            ]
        }
    }
EOD;
}

// 오늘 급식
elseif(strpos($content, "오늘") !== false && strpos($content, "급식") !== false){
echo <<< EOD
    {
        "message": {
            "text": "오늘 급식은 {meal}입니다."
        },
        "keyboard": { 
            "type": "buttons",
            "buttons": [
                "급식",
                "날씨",
                "자유대화"
            ]
        }
    }
EOD;
}

// 내일 급식
elseif(strpos($content, "내일") !== false && strpos($content, "급식") !== false){
echo <<< EOD
    {
        "message": {
            "text": "내일 급식은 {meal}입니다."
        },
        "keyboard": { 
            "type": "buttons",
            "buttons": [
                "급식",
                "날씨",
                "자유대화"
            ]
        }
    }
EOD;
}

// 자유대화
if($content == "자유대화"){
echo <<< EOD
    {
        "message": {
            "text": "안녕?\\n(탈출하려면 <처음으로> 입력!)"
        }
    }
EOD;
}
?>