function validate_student()
{
    var name = register.student_name;
    var id = register.student_id;
    var email = register.student_email;

    const id_pattern = /[d-]+/;
    var isid = id_pattern.test(id.value);
    
    const email_pattern = /([\d-]+)(@std.ewubd.edu)/;
    var isemail = email_pattern.test(email.value);

    if ( isid == false) {
        alert("You must provide a EWU Student ID");
        id.focus();
        return false;
    }

    if (isemail == false) 
    {
        
        alert("You must provide a valid EWU Student email");
        email.focus();
        return false;
    }
   
}