// $(document).ready(async function() {
//     var box = $('#greetings')
//     var parent = box.parent()

//     async function renderUsers() {
//         var users = await getUsers();
//         users.forEach((user) => {
//             var cloneBox = box.clone().append(user.name)
//             parent.append(cloneBox)
//         });
//     } 

//     var reload = $('#reload')
//     reload.click(async () => {
//         await renderUsers()
//     })

//     renderUsers()
// });

// async function getUsers() {
//     var response = await fetch('/food-recipies/api/get_users.php');
//     var data = await response.json();
//     var users = await data.users
//     return users
// }
