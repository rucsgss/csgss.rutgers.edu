OUTPUT = default-min.css

all: $(OUTPUT)

default-min.css: default.css
	yuicompressor -o $@ $<

clean:
	@rm -f $(OUTPUT) default-min.css
