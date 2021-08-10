const chatButton = document.querySelector('.chatbox__button');
const chatContent = document.querySelector('.chatbox__support');

const chatButton1 = document.querySelector('.chatbox__button1');
const chatContent1 = document.querySelector('.chatbox__support1');

const chatButton2 = document.querySelector('.chatbox__button2');
const chatContent2 = document.querySelector('.chatbox__support2');

const chatButton3 = document.querySelector('.chatbox__button3');
const chatContent3 = document.querySelector('.chatbox__support3');

const chatButton4 = document.querySelector('.chatbox__button4');
const chatContent4 = document.querySelector('.chatbox__support4');

const icons = {
    isClicked: '???',
    isNotClicked: '???'
}



const chatbox = new InteractiveChatbox(chatButton, chatContent, icons);
// console.log('chatbox',chatbox)
chatbox.display();


const chatbox1 = new InteractiveChatbox(chatButton1, chatContent1, icons);
chatbox1.display();


const chatbox2 = new InteractiveChatbox(chatButton2, chatContent2, icons);
chatbox2.display();


const chatbox3 = new InteractiveChatbox(chatButton3, chatContent3, icons);
chatbox3.display();


const chatbox4 = new InteractiveChatbox(chatButton4, chatContent4, icons);
chatbox4.display();