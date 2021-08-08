const chatButton = document.querySelector('.chatbox__button');
const chatContent = document.querySelector('.chatbox__support');

const chatButton1 = document.querySelector('.chatbox__button1');
const chatContent1 = document.querySelector('.chatbox__support1');

const chatButton2 = document.querySelector('.chatbox__button2');
const chatContent2 = document.querySelector('.chatbox__support2');

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