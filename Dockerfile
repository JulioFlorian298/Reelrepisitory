 FROM ubuntu latest
	Run apt install node
	FROM node 2104
	COPY./app
	RUN npm install
	CMD npm start