document.addEventListener("DOMContentLoaded", () => {
  const btn = document.querySelector('#upload_btn')

  btn.addEventListener('click', (event) =>{
    event.preventDefault(); // 기본 기능 막기
    const f = document.upload_form
    if(f.photo.value == '') {
      alert('파일을 첨부해 주세요.')
      return false;
    }
    f.submit(); // 기본 기능을 막았기 때문에 조건을 통과한다면 submit
  })
})