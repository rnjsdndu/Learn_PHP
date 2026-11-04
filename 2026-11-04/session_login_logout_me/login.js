document.addEventListener('DOMContentLoaded', () => {
  const id = document.querySelector('#id')
  const pw = document.querySelector('#pw')
  const btn = document.querySelector('#login_btn')

  btn.addEventListener('click', (e) => {
    e.preventDefault();
    if(id.value == '') {
      alert('아이디를 입력해주세요.')
      id.focus();
      return
    }
    if(pw.value == '') {
      alert('비밀번호를 입력해주세요.')
      pw.focus();
      return
    }
    document.login_form.submit();
  })
  
})