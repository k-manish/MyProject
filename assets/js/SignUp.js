function checkfun()
{
    var name=document.getElementById("name").value;
    var mail=document.getElementById("mail").value;
    var mobile=document.getElementById("mobile").value;
    
    if(name===null || name==="" || (!(/^[A-Za-z]{2,}/.test(name))))
    {
        alert("bad")
        return false;
    }
    if(mail===null || mail==="" )
    {
        return false;
    }
    if(mobile===null || mobile==="" || (!(/^(1-9)[0-9]{9}/.match(mobile))))
    {
        return false;
    }
}