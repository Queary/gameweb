//alert("redu")

//глоба
function doc(ido){
	let ele = document.getElementById(ido)
	//каталог методов
	//создание Create
	this.getel = {
		ele(id){
			return ele;
		}}
  this.s = {
  	show(){
  		return ele.style.display = "block";
  	},
    hidden(){
      return ele.style.display = "none";
    }}
  return this
}







//одиночные методы

function print(content){
  return console.log(content)
}

function value(ID) {
	let x = document.getElementById(ID).value
	return x
}
function edit_value(ID,content) {
	let x = document.getElementById(ID).value = content
	return x
}

function txt(ido) {
	let txt = document.getElementById(ido).innerHTML
	return txt
}
function edit_txt(ido,content) {
	let txt = document.getElementById(ido).innerHTML = content
	return txt
}

function redu_v(){
  return print("developer edition:vo.1")
}
