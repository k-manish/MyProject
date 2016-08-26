function checkfun()
{
    var name=document.getElementById("name").value;
    var mail=document.getElementById("mail").value;
    var mobile=document.getElementById("mobile").value;
    
    document.getElementById("name_err").innerHTML=" ";
    document.getElementById("mail_err").innerHTML=" ";
    document.getElementById("mobile_err").innerHTML=" ";
    if(name===null || name==="" )
    {
        document.getElementById("name_err").innerHTML="fill the coreect name";
        return false;
    }
    if(!(/^[A-Za-z]{3,}[A-Za-z ]*$/.test(name)))
    {
        document.getElementById("name_err").innerHTML="fill the coreect name";
        return false;
    }
    if(mail===null || mail==="" )
    {
        document.getElementById("mail_err").innerHTML="fill the coreect email id";
        return false;
    }
    if(mobile===null || mobile==="")
    {
        document.getElementById("mobile_err").innerHTML="fill the coreect contact number";
        return false;
    }
    if(/^[0-9]{10}/.test("mobile") || mobile.length!=10 )
    {
        
        document.getElementById("mobile_err").innerHTML="fill the coreect contact number";
        return false;
    }
}