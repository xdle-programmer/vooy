class Rooms {
  constructor() {
    this.rooms = []
  }

  add(id, status, owner, moder = null) {
    this.rooms.push({
      id: id, status: status, owner: owner, moder: moder
    })
  }

  get(id) {
    return this.rooms.find(u => u.id == id)
  }

  getAll(){
    return this.rooms;
  }

  changeStatus(id, status) {
    return this.rooms.find(u => u.id == id)['status'] = status;
  }

  addOwner(id, userId) {
    return this.rooms.find(u => u.id == id)['owner'] = userId;
  }

  addModer(id, userId) {
    console.log('------------');
    console.log(this.rooms);
    console.log('------------');
    console.log(id +" --- "+ userId);
    console.log('------------');
    if (this.rooms.find(u => u.id == id)['moder']) {
      return this.rooms.find(u => u.id == id)['moder'] = userId;
    }
    else 'addModer: fail'
  }

  removeModer(id) {
    return this.rooms.find(u => u.id == id)['moder'] = null;
  }

  remove(id) {
    const room = this.get(id)
    if (room) {
      this.rooms = this.rooms.filter(u => u.id != room.id)
    }
    return room
  }
}

module.exports = function() {
  return new Rooms()
}
