let mic = document.getElementById("mic");
let chatareamain = document.querySelector('.chatarea-main');
let chatareaouter = document.querySelector('.chatarea-outer');

let intro = ["If you want to contact our team please go to the Contact us page ", " You can contact us regarding any issues you have on the number provided "];
let help = ["How can i help you?","What i can do for you?"];
let shop = ["We are available on all online platforms 24/7. If you wish to visit us our shop is open on all weekdays from 10am to 5pm "];
let products = [" If you wish to buy anything pleses go to our Products page", "You can check out all our merchnadise on our Products page"];
let tables = ["If you are looking for coffee tables you can go ahead to our product page and view our coffee table catalogues"];
let us = ["To know more about the creators of cozy void please proceed to the 'About Us' page","For information about the owners you could check out the 'About Us' page"];
let thank = ["Your welcome","My pleasure","Glad I could help"];
let projects = ["If you wish to see some of your alreday created projects you could go to the Projects page","You can check out our latest creations in the Project page"];
let last = ['For details on this matter please contact the shop','For further info please contact the shop','For more help please contact us '];
let defective = ["If you have received a defective product please report it to the shop from where it has been dispatched within 3 working days"];
let chair = ["If you are interested in chairs or sofas head over to our PRODUCTS PAGE and view the top selected designs selected for you "];
let page = ["If you are interested in some of our products head over to our PRODUCTS PAGE and view the top selected designs selected for you "];
let light = ["Lights can help you re define your whole home ...Go ahead to the PRODUCT PAGE and click on Lights to be awed"];
let hello=["Hi, how can i help you."];

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();

function showusermsg(usermsg){
    let output = '';
    output += `<div class="chatarea-inner user">${usermsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

function showchatbotmsg(chatbotmsg){
    let output = '';
    output += `<div class="chatarea-inner chatbot">${chatbotmsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

function chatbotvoice(message){
    const speech = new SpeechSynthesisUtterance();
    speech.text = "I didn't quit get that could you repeat yourself ";
    if(message.includes('help')||message.includes('contact')||message.includes('issues')){
        let finalresult = intro[Math.floor(Math.random() * intro.length)];
        speech.text = finalresult;
    }
    if(message.includes('find')){
        let finalresult = help[Math.floor(Math.random() * help.length)];
        speech.text = finalresult;
    }
    if(message.includes('shop open')||message.includes('timings')||message.includes('shop')){
        let finalresult = shop[Math.floor(Math.random() * shop.length)];
        speech.text = finalresult;
    }
    if(message.includes('products')||message.includes('buy')||message.includes('shopping')||message.includes('goods')){
        let finalresult = product[Math.floor(Math.random() * product.length)];
        speech.text = finalresult;
    }
    if(message.includes('table')||message.includes('tables')){
        let finalresult = tables[Math.floor(Math.random() * tables.length)];
        speech.text = finalresult;
    }
    if(message.includes('thank you')||message.includes('thanks')){
        let finalresult = thank[Math.floor(Math.random() * thank.length)];
        speech.text = finalresult;
    }
    if(message.includes('homes')||message.includes('your creations')||message.includes('home')||message.includes('creation')){
        let finalresult = projects[Math.floor(Math.random() * projects.length)];
        speech.text = finalresult;
    }

    if(message.includes('shop owner')||message.includes('owners')||message.includes('About cozy void')||message.includes('owner')){
        let finalresult = us[Math.floor(Math.random() * us.length)];
        speech.text = finalresult;
    }

    if(message.includes('damaged goods') ||message.includes('defective product')||message.includes('damaged good')||message.includes('damaged product')||message.includes('damaged products')||message.includes('defective products')){
        let finalresult = defective[Math.floor(Math.random() * defective.length)];
        speech.text = finalresult;
    }

    if(message.includes('chair')||message.includes('sofas')){
        let finalresult = chair[Math.floor(Math.random() * chair.length)];
        speech.text = finalresult;
    }

    if(message.includes('kitchen')||message.includes('bookshelf')||message.includes('bookshelves')){
        let finalresult = chair[Math.floor(Math.random() * chair.length)];
        speech.text = finalresult;
    }

    if(message.includes('lights')||message.includes('light')||message.includes('lighting')){
        let finalresult = light[Math.floor(Math.random() * light.length)];
        speech.text = finalresult;
    }
    if(message.includes('hello')||message.includes('hi')){
        let finalresult = hello[Math.floor(Math.random() * hello.length)];
        speech.text = finalresult;
    }


    window.speechSynthesis.speak(speech);
    chatareamain.appendChild(showchatbotmsg(speech.text));
}

recognition.onresult=function(e){
    let resultIndex = e.resultIndex;
    let transcript = e.results[resultIndex][0].transcript;
    chatareamain.appendChild(showusermsg(transcript));
    chatbotvoice(transcript);
    console.log(transcript);
}
recognition.onend=function(){
    mic.style.background="#ff3b3b";
}
mic.addEventListener("click", function(){
    mic.style.background='#39c81f';
    recognition.start();
    console.log("Activated");
})
