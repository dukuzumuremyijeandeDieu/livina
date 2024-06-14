const maleBlock = document.getElementById('male');
const femaleBlock = document.getElementById('female');
const quizBlock = document.getElementById('below_15_quiz');
const examBlock = document.getElementById('above_35_exam');
const belowExamBlock = document.getElementById('below_10_exam');

const male_traineeBtn = document.getElementById('male_trainee');
const female_traineeBtn = document.getElementById('female_trainee');
const trainee_below_15Btn = document.getElementById('trainee_below_15');
const trainee_above_35Btn = document.getElementById('trainee_above_35');
const trainee_below_10Btn = document.getElementById('trainee_below_10');

male_traineeBtn.addEventListener('click',function(){
    maleBlock.style.display='block';
    femaleBlock.style.display='none';
    quizBlock.style.display='none';
    examBlock.style.display='none';
    belowExamBlock.style.display='none';
})

female_traineeBtn.addEventListener('click',function(){
    maleBlock.style.display='none';
    femaleBlock.style.display='block';
    quizBlock.style.display='none';
    examBlock.style.display='none';
    belowExamBlock.style.display='none';
})

trainee_below_15Btn.addEventListener('click',function(){
    maleBlock.style.display='none';
    femaleBlock.style.display='none';
    quizBlock.style.display='block';
    examBlock.style.display='none';
    belowExamBlock.style.display='none';
})

trainee_above_35Btn.addEventListener('click',function(){
    maleBlock.style.display='none';
    femaleBlock.style.display='none';
    quizBlock.style.display='none';
    examBlock.style.display='block';
    belowExamBlock.style.display='none';
})

trainee_below_10Btn.addEventListener('click',function(){
    maleBlock.style.display='none';
    femaleBlock.style.display='none';
    quizBlock.style.display='none';
    examBlock.style.display='none';
    belowExamBlock.style.display='block';
})