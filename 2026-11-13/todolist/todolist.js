document.addEventListener('DOMContentLoaded', () => {
  const todobtn = document.querySelector('#todobtn')

  todobtn.addEventListener('click', () => {
    const subject = document.querySelector('#subject')
    if(subject.value == "") {
      alert("할일을 입력해 주세요.");
      subject.focus();
      return;
    }

    document.todoform.submit();
    
  })
})

function todoCheck(idx) {
  const multiform = document.querySelector('#multiform')

  multiform.mode.value = 'done';

  multiform.idx.value = idx;
  multiform.submit();

}

function todoUnCheck(idx) {
  const multiform = document.querySelector('#multiform')

  multiform.mode.value = 'undone';

  multiform.idx.value = idx;
  multiform.submit();

}

function todoDelete(idx) {

  if(confirm('삭제하시겠습니까?')) {
    const multiform = document.querySelector('#multiform')
  
    multiform.mode.value = 'delete';
  
    multiform.idx.value = idx;
    multiform.submit();
  }
}