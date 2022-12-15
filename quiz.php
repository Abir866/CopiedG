<!-- Quiz -->
<?php
// global variables to decide the css that is being used
// quiz is for quiz page, submit pic for submit pic and gallery for gallery page 
$quiz = 1;?>
<!DOCTYPE html>
<?php include './common/document_head.php'; ?>
<?php include './common/banner.php'; ?>
<?php include './common/nav.html'; ?>

<div id="content">
    <div id="quizcon">
        <div id="start">Let's learn about trees in the Woodland!</div>
        <div id="quiz" style="display: none">
            <div id="question"></div>
            <div id="emoji"></div>
            <div id="options">
                <div class="option" id="A" onclick="checkAns('A')"></div>
                <div class="option" id="B" onclick="checkAns('B')"></div>
                <div class="option" id="C" onclick="checkAns('C')"></div>
            </div>
            <div id="progress"></div>
        </div>
        <div id="scoreContainer" style="display: none"></div>
    </div>
    <script src="scripts/quiz.js"></script>
</div>
<script type="module" src="./scripts/quiz.js"></script>
</body>
</html>
