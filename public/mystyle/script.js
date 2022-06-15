const disabled = (Red_social,check) => {
    alert(Red_social);
    var checkBox = document.getElementById(check);
    var text = document.getElementById(Red_social);
    if (checkBox.checked == true){
        document.getElementById(Red_social).disabled = true;
    } else {
        document.getElementById(Red_social).disabled = false;
    }
};
function create_red_social(red_social,check_id){
    var checkBox = document.getElementById(check_id);
    if (checkBox.checked == true){
        document.getElementById(red_social).disabled = false;
    } else {
        document.getElementById(red_social).disabled = true;
    }
}