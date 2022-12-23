import tensorflow as tf, sys, argparse

def main(args):
    image_data = tf.gfile.FastGFile(args.image_path, 'rb').read()
    label_lines = [line.rstrip() for lin