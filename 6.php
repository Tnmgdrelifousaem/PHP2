function getCurrentTimeWithDeclension() {
    $hours = date('G');
    $minutes = date('i');
    
    // Склонение часов
    $hourWord = 'час';
    if ($hours >= 2 && $hours <= 4) {
        $hourWord = 'часа';
    } elseif ($hours >= 5 || $hours == 0) {
        $hourWord = 'часов';
    }
    
    // Склонение минут
    $minuteWord = 'минута';
    $lastDigit = $minutes % 10;
    $lastTwoDigits = $minutes % 100;
    
    if ($lastTwoDigits >= 11 && $lastTwoDigits <= 14) {
        $minuteWord = 'минут';
    } elseif ($lastDigit == 1) {
        $minuteWord = 'минута';
    } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
        $minuteWord = 'минуты';
    } else {
        $minuteWord = 'минут';
    }
    
    return "$hours $hourWord $minutes $minuteWord";
}
