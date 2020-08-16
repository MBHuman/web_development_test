<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="script.js"></script> 
        <!-- <script type="text/javascript" src="../frameworks/jquery.js"></script> -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        

        <!-- content -->
        <div class="wrapper">
            <div class="header">
                <img class="image__1" src="../images/bank.png">
                <img class="image__2" src="../images/phone_number.png">    
            </div>

            <div class="menu">
                <div class="main_content">
                    <div class="credit_cards">
                        <p>Кредитные карты</p>
                    </div>
                    <div class="holdings">
                        <p>Вклады</p>
                    </div>
                    <div class="debet_card">
                        <p>Дебетовая карта</p>
                    </div>
                    <div class="insurance">
                        <p>Страхование</p>
                    </div>
                    <div class="friends">
                        <p>Друзья</p>
                    </div>
                    <div class="internet-bank">
                        <p>Интернет-банк</p>
                    </div>
                </div>
            </div>

            <div class="navigation_bar">
                <u><p>Главная</p></u>
                <p> - </p>
                <u><p>Вклады</p></u>
                <p> - </p>
                <p>Калькулятор</p>
            </div>
            <form method="post" action="">
            <div class="calculator">
                <h3 class="calculator__header">Калькулятор</h3>
                <div class="parametrs">
                    <div class="first_parametrs">
                        <div class="calc_block"> 
                            <div class="calc_text"><p2>Дата оформления вклада</p2></div>
							<div class="calc_input">
                                <input type="text" id="datepicker" name="date">
                                    <script>
                                        $(function() {
                                            $("#datepicker").datepicker({
                                                
                                            });
                                        });
                                    </script>
                                </input>
							</div>
                        </div>
                        <div class="calc_block">
                            <div class="calc_text"><p2>Сумма вклада</p2></div>
                            <div class="calc_input"><input class="first_calc_input" name="calc_text" id="first_slider_calc" type="number" min="1000" max="3000000"></div>
                        </div>
                        <div class="calc_block">
                            <div class="calc_text"><p2>Срок вклада</p2></div>
                            <div class="calc_input">
                                <select name="deposit">
                                    <option checked="checked">1 год</option>
                                    <option>2 года</option>
                                    <option>3 года</option>
                                    <option>4 года</option>
                                    <option>5 лет</option>
                                </select>
                            </div>
                        </div>
                        <div class="calc_block">
                            <div class="calc_text"><p2>Пополнение вклада</p2></div>
                            <div class="calc_input">
                                <input type="radio" name="holding" checked="checked"> нет
                                <input type="radio" name="holding"> да
                            </div>
                        </div>
                        
                        <div class="calc_block">
                            <div class="calc_text"><p2>Сумма пополнения вклада</p2></div>
                            <div class="calc_input"><input class="second_calc_input" name="deposit" id="second_slider_calc" type="number" name="second" min="1000" max="3000000"></div>
                            <!-- <div class="slider_2"><p>slider_2</p></div> -->
                        </div>
                        
                    </div>
                    <!-- SLIDER -->
                    <div class="second_parametrs">
                        <div class="first_block_slider">
                            <input class="slider_1" id="first_slider_range" type="range" min="1000" max="3000000" step="1000" value="1000">
                            <script>
                                var first_range = document.getElementById("first_slider_range");
                                var first_calc = document.getElementById("first_slider_calc")

                                first_range.oninput = function(e) {
                                    var event = new CustomEvent('sync', {
                                        detail: first_range.value
                                    })
                                    first_range.dispatchEvent(event);
                                }

                                first_range.addEventListener('sync', function(e) {
                                    first_calc.value = e.detail
                                })
                            </script>
                        </div>

                        <div class="second_block_slider">
                            <input class="slider_2" id="second_slider_range" type="range" min="1000" max="3000000" step="1000" value="1000">
                            <script>
                                var second_range = document.getElementById("second_slider_range");
                                var second_calc = document.getElementById("second_slider_calc")
                                second_range.oninput = function(e) {
                                    var event = new CustomEvent('sync', {
                                        detail: second_range.value
                                    })
                                    second_range.dispatchEvent(event);
                                }

                                second_range.addEventListener('sync', function(e) {
                                    second_calc.value = e.detail
                                })
                            </script>
                        </div>
                    </div>
                    <!-- SLIDER -->
                </div>
                </form>

                <div class="calculator_button">
                    
                    <div class="calc_1">
                        <button class="calc_button">
                            <p>Рассчитать</p>
                        </button>
                    </div>

                    <div class="calc_2">
                        <p id="result">Результат:</p>
                    </div>
                    <div class="credit_cards"></div>
                    <div class="holdings"></div>
                    <div class="debbet_card"></div>
                    <div class="insurance"></div>
                    <div class="friends"></div>
                    <div class="internet-bank"></div>
                </div>
            </div>
        </div>
        <!-- // content -->


        <!-- footer -->
        <div class="footer">
            <div class="footer-content">
                <p><u>Кредитные карты</u></p>
                <p><u>Вклады</u></p>
                <p><u>Дебетовая карта</u></p>
                <p><u>Страхование</u></p>
                <p><u>Друзья</u></p>
                <p><u>Интернет-банк</u></p>
            </div>
        </div>
        <!-- // footer -->
    </body>
</html>