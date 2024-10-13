FROM node:8-alpine As build

ENV NODE_ENV=development

WORKDIR /usr/src/app

COPY package.json ./

RUN apk update && apk upgrade && \
    apk add --no-cache bash git openssh

RUN npm install

COPY . /usr/src/app

RUN npm run build
