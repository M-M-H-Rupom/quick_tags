
QTags.addButton('quicktag1','U','<u>','</u>');
QTags.addButton('quicktag2','Hi',say_hi);
QTags.addButton('quicktag2','FA',qt_fav);

function say_hi(){
    var text = prompt("What is you name");
    var name = `hello ${text}`;
    QTags.insertContent(name);
}
function fa_data(cron){
    tb_remove();
    QTags.insertContent(`<i class="fa ${cron}"></i>`)
}
function qt_fav(){
    tb_show('fontawsome',qt_line.p_url);
}
console.log(qt_line);