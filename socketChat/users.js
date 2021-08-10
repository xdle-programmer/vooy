class Users {
    constructor() {
        this.users = []
    }

    getAll() {
        /*
        console.log("INSIDE CLASS");
        console.log(this.users);
        console.log("INSIDE CLASS");*/
        return this.users;
    }

    add(id, name, room, role = 0, socketId = null) {
        this.users.push({
            id, name, room, role, socketId
        })
    }

    get(id) {
        return this.users.find(u => u.id == id)
    }

    getBySocket(socketId) {
        return this.users.find(u => u.socketId == socketId)
    }

    getByRoomAndId(id, room) {
        return this.users.find(u => u.id == id && u.room == room)
    }

    remove(socketId) {
        const user = this.getBySocket(socketId)
        if (user) {
            this.users = this.users.filter(u => u.socketId != user.socketId)
        }
        return user
    }

    getByRoom(room) {
        return this.users.filter(u => u.room == room)
    }
}

module.exports = function () {
    return new Users()
}
