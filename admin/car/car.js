const insert =document.getElementById('insert');
insert.addEventListener('click', () => {
  const formInsert = document.getElementById('formInsert');

  if(formInsert.style.display === 'none') {
    // 👇️ this SHOWS the form
    formInsert.style.display = 'block';
  } else {
    // 👇️ this HIDES the form
    formInsert.style.display = 'none';
  }
});

const deleted = document.getElementById('delete');
deleted.addEventListener('click',() => {
    const formDelete = document.getElementById('formDelete');
      
      if(formDelete.style.display === 'none') {
          // 👇️ this SHOWS the form
          formDelete.style.display = 'block';
        } else {
          // 👇️ this HIDES the form
          formDelete.style.display = 'none';
        }
  });

const update = document.getElementById('update');
update.addEventListener('click',() => {
    const formUpdate = document.getElementById('formUpdate');
      
      if(formUpdate.style.display === 'none') {
          // 👇️ this SHOWS the form
          formUpdate.style.display = 'block';
        } else {
          // 👇️ this HIDES the form
          formUpdate.style.display = 'none';
        }
  });