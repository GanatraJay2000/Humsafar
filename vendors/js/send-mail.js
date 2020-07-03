var id;

function formSubmit(ele) {
    id = ele.id;
    var phNo = '917972720689';
    var receiver = 'somaiyahamclub@gmail.com';  
    var name = document.querySelector('#form-name').value;
    var email = document.querySelector('#form-email').value;
    var msg = document.querySelector('#form-msg').value;
    if (name === '') {
        document.getElementById('form-name').style.border = '2px solid red';
        document.getElementById('name-prompt').style.display = 'block';
        document.getElementById('form-name').classList.add('animated', 'pulse');
    }
    if (email === '') {
        document.getElementById('form-email').style.border = '2px solid red';
        document.getElementById('email-prompt').style.display = 'block';
        document.getElementById('form-email').classList.add('animated', 'pulse');
    }
    if (msg === '') {
        document.getElementById('form-msg').style.border = '2px solid red';
        document.getElementById('msg-prompt').style.display = 'block';
        document.getElementById('form-msg').classList.add('animated', 'pulse');
    }

    if (name !== '' && email !== '' && msg !== '') {
        send_mail(id);
    }
}

function returnToNormal(ele) {
    ele.style.border = '1px solid slategrey';

    var prompt = ele.name.concat('-prompt');

    document.getElementById(prompt).style.display = 'none';
}

function send_mail(id) {
    // Edit mail-id here
    var name = document.getElementById('form-name').value;
    var sender = document.getElementById('form-email').value;
    var subject = 'Concern regarding HAM website.';
    var msg = document.getElementById('form-msg').value;
    var inputId = id + '-input';

    var value = document.getElementById(inputId).value;

    if (value === 'email') {
        receiver = receiver.replace(/\s+/g, '%20');

        sender = sender.replace(/\s+/g, '%20');

        msg = msg.replace(/\s+/g, '%20');

        subject = subject.replace(/\s+/g, '%20');
        var res = 'mailto:'.concat(receiver, '?bcc=', sender, '&subject=', subject, '&body=', msg, '-', name);
        document.getElementById('form-submit-btn').href = res;
        var value = document.getElementById('form-submit-btn').href;
    } else if (value === 'whatsapp') {
        msg = msg.replace(/\s+/g, '%20');

        var res = 'https://wa.me/'.concat(phNo, '?text=', msg);
        console.log(res);
        document.getElementById(id).href = res;
        //
    }
}