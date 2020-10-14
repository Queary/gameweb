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

function redu_v(){
  return print("developer edition:vo.1")
}
