
const tooltip = new (function() {
  const node = document.createElement('div');
  node.className = 'tooltip';
  node.classList.add('hidden');
  document.body.appendChild(node);

  this.follow = function(event) {
    node.style.left = event.pageX + 5 + 'px';
    node.style.top = event.pageY  - node.offsetHeight + 'px';
  };

  this.show = function(event) {
    node.innerHTML = event.target.dataset.tooltip;
    node.classList.add(event.target.dataset.tpclass);
    node.classList.remove('hidden');
  };

  this.hide = function(event) {
    node.classList.add('hidden');
    node.classList.add(event.target.dataset.tpclass);
  };
})();

const links = document.querySelectorAll('[data-tooltip]');

links.forEach(link => {
  link.onmouseover = tooltip.show;
  link.onmousemove = tooltip.follow;
  link.onmouseout = tooltip.hide;
});
