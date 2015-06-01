// bad
if (currentUser) {
  function test() {
    console.log('Nope.');
  }
}

// ok
let test;
if (currentUser) {
  test = () => {
    console.log('Yup.');
  };
}
