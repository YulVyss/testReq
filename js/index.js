const userLogin = '493358_stroyzar';
const userPassword = 'sAVDkrEbqd';
const art = 'OC47';

const btn = document.querySelector('.submit')
async function sendReq() {
  try {
    let response = await fetch(`https://api.forum-auto.ru/v2/listGoods?login=${userLogin}&pass=${userPassword}&art=${art}`,
    );
    let json = await response.json();
    // console.log(json)
  } catch (error) {
    console.log(`Error! ${error}`);
  }



}

btn.addEventListener('click', (ev) => {
  // ev.preventDefault()
  sendReq()
  // fetch(`https://api.forum-auto.ru/v2/listGoods?login=${userLogin}&pass=${userPassword}&art=${art}`)
  //   .then(response => console.log(response.json()))
})