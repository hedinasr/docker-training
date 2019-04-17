CFLAGS = -static

all: hello build run

hello: hello.o
	gcc -o hello $(CFLAGS) hello.o

%.o: %.c
	gcc $(CFLAGS) -o $@ -c $<

build:
	docker build -t hello .

run:
	docker run --name=hello hello

clean:
	rm -f hello.o hello
	docker rm -f hello
	docker image rm -f hello
