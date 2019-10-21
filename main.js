/*let JohnScore = 51;
let NickScore = 51;
let passingLimit = 51; 

if (JohnScore >= passingLimit && NickScore >= passingLimit) {
    console.log('Both students passed');

} else if(JohnScore >= passingLimit && NickScore < passingLimit){
    console.log('John passed the exam with ' + JohnScore + ' points');

} else if(JohnScore < passingLimit && NickScore >= passingLimit){
    console.log('Nick passed the exam with ' + NickScore + ' points');

}
    
    else{
        console.log('Both students failed')
    }*/



let btn = document.querySelector('.btn');

btn.addEventListener('click', (e) => {
    e.preventDefault();
    console.log ('click');
});

$('document').ready(function(){
    $('.account').on('click', function(e){
        e.preventDefault();
        $(this).closest('.container').find('.account_menu').slideToggle();
    })

});
