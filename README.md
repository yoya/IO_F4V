# IO_F4V

f4v (flash video format) parser &amp; builder

#usage

```
% php sample/f4vdump.php
Usage: php f4vdump.php -f <f4v_file> [-htvd]
ex) php f4vdump.php -f input.f4v -t
% php sample/f4vdump.php -f t.f4v -t
type:ftyp
type:free
type:mdat
type:moov
    type:mvhd version:0 flags:0
    type:trak
        type:tkhd version:0 flags:3
        type:edts
        type:mdia
            type:mdhd
            type:hdlr version:0 flags:0
            type:minf
    type:trak
        type:tkhd version:0 flags:3
        type:edts
        type:mdia
            type:mdhd
            type:hdlr version:0 flags:0
            type:minf
    type:udta
```

# reference

- https://www.adobe.com/devnet/f4v.html
